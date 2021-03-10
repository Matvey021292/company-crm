<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Config;

class CompanyController extends Controller
{

    /**
     * @return string
     */
    public function index()
    {
        $items = Company::paginate(Config::get('setting.per_page'));
        return view('company.index')
            ->with('items', $items)
            ->render();
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
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
    }
}
