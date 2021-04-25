<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(){
    	echo "index call ";
    	echo "Test";
    	return view('admin/dashboard');
    	// return view('admin/dashboard');
    }
}
