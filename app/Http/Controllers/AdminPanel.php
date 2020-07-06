<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
	public function email_exist(Request $request){
		
		$validator = validator::make($request->all(), [
			'email' => 'required|email',
		]);

		if($validator->passes()){
			return response()->json(true);
		}else{
			if($validator->errors()){
				$msg = array('status'=> false, 'message' => $validator->errors()->first());
				return response()->json(false);
			}
		}
		
	}
}
