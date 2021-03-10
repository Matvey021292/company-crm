<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies = Company::count();
        $employers = Employer::count();
        return view('home')
            ->with('companies', $companies)
            ->with('employers', $employers);
    }
}
