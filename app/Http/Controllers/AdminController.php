<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
    	 
    	return view('admin.index');
    	return "test admin";
    }
    public function users(Request $request)
    {
    	return view('admin.users.index');
    }
}
