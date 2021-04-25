<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Session;
// use App\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class Dashboard extends Controller
{
    /**
    *@uses code display home page.
    */
    public function index(){
    	// $get =  session()->all()['admin_user'];
    	// $get =  session::get('admin_user');
    	return view('admin/dashboard');
    }
    /**
    *@uses code for display profile page.
    */
    public function myProfile(){
    	$admin_details = session::get('admin_user');
    	$user_data = DB::table('users')->where('id', $admin_details['id'])->first();
    	
    	return view('admin/myprofile', ['user_data' =>$user_data]);
    }
    /**
    *@uses code for display profile page.
    */
    public function editprofile(Request $request){
    	$profile_img 	= $request->file('profile');
    	$admin_details 	= session::get('admin_user');

    	$rules = [
    		'uname'=>'required',
    	];
    	if($profile_img){
    		$rules = [
	    		'profile'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
	    	];	
    	}

    	$validation = validator::make($request->all(), $rules);
    	if($validation->passes()){
    		$flag_img = $flag_img_move = 1;
    		$new_profile_name = '';
    		
    		//Check Image exist or not
    		if($profile_img){
    			$new_profile_name = rand().date('His').'.'.$profile_img->getClientOriginalExtension();
    			
	    		if(!file_exists('admin_profile'))
	    		{
	    			mkdir('admin_profile', 0777, true);
	    		}

	    		if(file_exists('admin_profile'))
	    		{
	    			$profile_img->move(public_path('admin_profile'), $new_profile_name);
	    			$flag_img_move = 2;
	    		}else{
	    			$flag_img = 0;
	    		}	
    		}
    		
    		if($flag_img == 1){
    			//Update Image and name
    			$update_data['name'] = $request->uname;
    			$update_data['updated_at'] = date('Y-m-d H:i:s');
    			if($flag_img_move == 2){
    				$update_data['profile_img'] = $new_profile_name; 
    			}
    			$query = DB::table('users')->where('id', $admin_details['id'])->update($update_data);
    			if($query){
	    			return response()->json([
		    			'status' 		=> true,
		    			'message'		=> 'Records has been updated successfully.',
		    			'uploaded_image'=> '<img src="/admin_profile/'.$new_profile_name.'" class="img-thumbnail" alt="profile-image"/>'
		    		]);
    			}else{
    				return response()->json([
	    				'status' 		=>false,
	    				'message'		=>'Something went wrong in update records.',
	    				'class_name'	=>'alert-danger',
	    			]);	
    			}
    		}else{
    			return response()->json([
    				'status' 		=>false,
    				'message'		=>'Something went wrong in image upload.',
    				'class_name'	=>'alert-danger',
    			]);
    		}
    	}else{
    		
    		return response()->json([
    			'status' 	=> false,
    			'message'   => $validation->errors()->all(),
    			'class_name'=> 'alert-danger'
    		]);
    	}
    }

    /**
    *@uses code for change password
    */
    public function change_password(){
     	return view('admin/change_password');
    }

    public function edit_password(Request $request){
    	// echo '<pre>';
    	// print_r($request->all());

    	$validation = validator::make($request->all(), [
    		'old_password' => 'required',
    		'new_password' => 'required|max:10|same:confirm_password',
    		'confirm_password' => 'required'
    	]);
    	if($validation->passes()){

    		$admin_detail = session::get('admin_user');
    		$user = DB::table('users')->where('id', $admin_detail['id'])->first();
    		
    		$old_password = $request->old_password;
    		$has_new_pass = Hash::make($request->new_password);
	    	
    		if(Hash::check($old_password, $user->password)){
    			$update['password']= $has_new_pass;
    			$update_query = DB::table('users')->where('id', $admin_detail['id'])->update($update);
    			
    			if($update_query){
    				Session::flush();
    				return response()->json(['status' 		=> true,
		    			'message'		=> 'Password has been updated successfully.',
		    			'class_name'	=> 'alert-success',
		    			'redirect_url' 	=> 'admin/login'
		    		]);
    			}else{
    				return response()->json([
	    				'status' 		=> false,
	    				'message'		=> 'Something went wrong, please try later.',
	    				'class_name'	=> 'alert-danger',
	    			]);	
    			}
    		}else{
    			return response()->json([
    				'status' 		=> false,
    				'message'		=> 'The old password does not match.',
    				'class_name'	=> 'alert-danger',
    			]);
    		} 
    	}else{
    		return response()->json([
    			'status' 		=> false,
    			'message' 		=> $validation->errors()->first(),
    			'class_name'	=> 'alert-danger'
    		]);
    		
    	}
    }

   	/**
   	*@uses function to get user's list
   	*/
   	public function users(){
   		$users  = DB::table('users')->where('is_delete', 0)->get();

   		// echo '<pre>';
   		// print_r($users);
   		// echo '</pre>';
   		// echo 'Users ';
   		return view('admin/users/index', ['users' => $users, 'title' => 'Users' ]);
   	}

}
