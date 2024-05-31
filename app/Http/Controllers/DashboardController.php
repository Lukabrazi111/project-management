<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Display login page view
     */
    public function index()
    {


        return view('dashboard');
    }
}
