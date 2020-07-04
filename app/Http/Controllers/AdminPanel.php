<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    /**
    *@uses function to display login page.
    */
    public function index(){
    	return view('login_page');
    }

	/**
	*@uses function to validate email.
	*/    
	public function email_exist(){
		print_r($_POST);
	}
}
