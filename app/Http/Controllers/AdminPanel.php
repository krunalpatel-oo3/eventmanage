<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User;
use Auth;
use Illuminate\Support\Facades\Hash;
// use App\model\
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
		
		if(user::where('email', '=',$request->email)->count() > 0 ){
			return response()->json(true);
		}else{
			return response()->json(false);
		}
		// dd();
		// $validator = validator::make($request->all(), [
		// 	'email' => 'required|email',
		// ]);

		// if($validator->passes()){
			
		// }else{
		// 	if($validator->errors()){
		// 		$msg = array('status'=> false, 'message' => $validator->errors()->first());
		// 		return response()->json(false);
		// 	}
		// }
		
	}

	public  function login_process(Request $request){

		// date_default_timezone_set('Asia/Kolkata');
		// $date1 = "2020-07-23 18:05:00";
		// $date2 = date('Y-m-d H:i:s');
		// $seconds = strtotime($date2) - strtotime($date1);
		// echo $hours = round($seconds / 3600);
		// if($hours < 24){
		// 	echo "You can cancel the order.";
		// }else{
		// 	echo 'can not cancel order';
		// }

		$email = $request->email;
		$password = $request->password;
		
		if(Auth::attempt(['email' => $email, 'password' => $password, 'user_role_id' => 1]) ){
			$msg = array(
				'status'=>'true',
				'message'=> 'Login Successful'
			);

			$user = Auth::user();
			$user_detail = User::where(['email' =>$email])->first();
			if($user_detail){
				$user_array = array(
					'id' 			=> $user_detail->id,
					'name' 			=> $user_detail->name,
					'email' 		=> $user_detail->email,
					'user_role_id' 	=> $user_detail->user_role_id,
					'profile_img' 	=> $user_detail->profile_img,
					'created_at'	=> $user_detail->created_at,
				);
				$request->session()->put('admin_user', $user_array);
			}
			return response()->json($msg);
		}else{

			$msg = array(
				'status'=>'false',
				'message'=> 'Invalid email id or password.'
			);
			return response()->json($msg);
		}
	}
	public function logout(){
		session()->forget('admin_user');
		Auth::logout();
		return redirect('admin/login');
	}
}
