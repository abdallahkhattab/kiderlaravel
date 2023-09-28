<?php

namespace App\Http\Controllers;

use App\Models\DASHBOARD;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

        return view('admin.dashboard');
    }

}
