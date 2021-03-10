<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerRequest;
use App\Models\Company;
use App\Models\Employer;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Storage;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Employer::paginate(Config::get('setting.per_page'));
        return view('employer.index')
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
        return view('employer.create')->with('companies', $companies)->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerRequest $request)
    {
        $item = $request->only('name', 'lastname', 'email', 'phone', 'company_id');

        Employer::create($item);
        return redirect(route('employer.index'))
            ->with('notification', 'Employer created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Employer::findOrFail($id);
        $companies = Company::select('id', 'name')->get();
        return view('employer.edit')
            ->with('item', $item)
            ->with('companies', $companies)
            ->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployerRequest $request, $id)
    {
        $item = $request->only('name', 'email', 'lastname', 'phone', 'company_id');

        $employer = Employer::where('id', $id)->first();


        $employer->update($item);
        return redirect(route('employer.index'))
            ->with('notification', 'Employer edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employer::destroy($id);
    }
}
