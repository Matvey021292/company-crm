<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Employee::paginate(Config::get('setting.perPage'));
        return view('employee.index')
            ->with('items', $items)
            ->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create')->with('companies', $companies)->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $item = $request->only('name', 'lastname', 'email', 'phone', 'company_id');

        Employee::create($item);
        return redirect(route('employee.index'))
            ->with('notification', 'Employee created!');
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Employee::findOrFail($id);
        $companies = Company::select('id', 'name')->get();
        return view('employee.edit')
            ->with('item', $item)
            ->with('companies', $companies)
            ->render();
    }

    /**
     * @param EmployeeRequest $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(EmployeeRequest $request, $id)
    {
        $item = $request->only('name', 'email', 'lastname', 'phone', 'company_id');

        $employee = Employee::where('id', $id)->first();


        $employee->update($item);
        return redirect(route('employee.index'))
            ->with('notification', 'Employee edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
    }
}
