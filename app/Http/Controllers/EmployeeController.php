<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Config;
use Illuminate\Routing\Redirector;

class EmployeeController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $items = Employee::orderBy('id', 'desc')->simplePaginate(Config::get('setting.perPage'));

        return view('employee.index')
            ->with('items', $items);
    }


    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create')
            ->with('companies', $companies);
    }


    /**
     * @param EmployeeRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(EmployeeRequest $request)
    {
        $item = $request->only('name', 'lastname', 'email', 'phone', 'company_id');

        Employee::create($item);

        return redirect(route('employee.index'))
            ->with('notification', __('site.employeeCreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $item = Employee::findOrFail($id);
        $companies = Company::select('id', 'name')->get();

        return view('employee.edit')
            ->with('item', $item)
            ->with('companies', $companies);
    }


    /**
     * @param EmployeeRequest $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(EmployeeRequest $request, $id)
    {
        $item = $request->only('name', 'email', 'lastname', 'phone', 'company_id');

        $employee = Employee::where('id', $id)->first();

        $employee->update($item);
        return redirect(route('employee.index'))
            ->with('notification', __('site.employeeEdit'));
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        Employee::destroy($id);
    }
}
