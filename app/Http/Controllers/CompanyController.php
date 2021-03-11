<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Mail\NewCompanyNotification;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Config;

class CompanyController extends Controller
{

    /**
     * @return string
     */
    public function index()
    {
        $items = Company::paginate(Config::get('setting.perPage'));
        return view('company.index')
            ->with('items', $items);
    }


    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('company.create');
    }


    /**
     * @param CompanyRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CompanyRequest $request)
    {
        $item = $request->only('name', 'email', 'site');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->storePublicly('public');;
            $item['logo'] = $logo;
        }

        Company::create($item);

        $details = [
            'title' => "Create new company {$item['name']}",
        ];

        if(env('ADMIN_EMAIL_TO')){
            Mail::to('ADMIN_EMAIL_TO')->send(new NewCompanyNotification($details));
        }

        return redirect(route('company.index'))
            ->with('notification', 'Company created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }


    /**
     * @param $id
     * @return string
     */
    public function edit($id)
    {
        $item = Company::findOrFail($id);
        return view('company.edit')
            ->with('item', $item)
            ->render();
    }


    /**
     * @param CompanyRequest $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(CompanyRequest $request, $id)
    {
        $item = $request->only('name', 'email', 'site');

        $current = Company::where('id', $id)->first();

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->storePublicly('public');
            Storage::delete($current->logo);
            $item['logo'] = $logo;
        }

        $current->update($item);
        return redirect(route('company.index'))
            ->with('notification', 'Company edited!');

    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $employees = Employee::select('id')->where('company_id', $id)->get();

        if($employees->isEmpty()){
            Company::destroy($id);
        }else{
            return response()->json(
                [
                    'status' => 'error',
                    'message' => __('site.existEmployeeInCompany')
                ]
            );
        }
    }
}
