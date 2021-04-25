<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DataTables;
use URL;
use DB;
use Session;

class Users extends Controller
{

	public function __construct(){
		// $admin_detail = session::get('admin_user');
	}
    /**
    *@uses function to get users records
    */
    public function index(Request $request){
    	
    	if ($request->ajax()) {
    		$condition['is_delete'] = 0;
    		$data = User::latest()->where($condition)->whereIn('user_role_id', [1,2])->get();
    		dd($request->filter);
	        return Datatables::of($data)
	            ->addIndexColumn()
	            ->addColumn('action', function($row){
	            	$url_delete = URL::to('admin/user_delete');
	            	$url_edit = URL::to('admin/user_edit');
                   	$btn = '<a href="'.$url_edit.'/'. $row->id.'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                   	$btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delete_user" data-url="'.$url_delete.'">Delete</a>';
	                    return $btn;
	            })
	            ->addColumn('status', function($row){
	            	$btns='';
	            	$url_status = URL::to('admin/changeUserStatus');
	            	if($row->is_active == '0'){
                   		//Not active user.
                   		$status = 'actv';
                   		
                   		$btns .= '<span class="badge badge-danger cust_cursor" data-url="'.$url_status.'" onclick= "return userStatus(this,'.$row->id.', \''.$status.'\')" >InActive</span>';
                   	}else{
                   		//Active user.
                   		$status = 'inactv';
                   		$btns .= '<span class="badge badge-success cust_cursor" data-url="'.$url_status.'" onclick= "return userStatus(this,'.$row->id.', \''.$status.'\')">Active</span>';
                   	}
                   	return $btns;
	            })
	            ->rawColumns(['status', 'action'])
	            ->make(true);

    	}
    	return view('admin/users/index', compact('products'));
    	
    }

    /**
    *@uses function to change users status.
    **/
    public function changeUserStatus(request $request){
    	
    	if(is_numeric($request->user_id) && $request->user_status !=''){
    		if($request->user_status == 'actv'){
    			$update['is_active']= 1;
    			$query = DB::table('users')->where('id', $request->user_id )->update($update);
    			$message = 'User active has been successfully.';
    		}else{
    			$update['is_active']= 0;
    			$query = DB::table('users')->where('id', $request->user_id )->update($update);
    			$message = 'User Inactive has been successfully.';
    		}
    		if($query){
    			echo json_encode(array('status'=> true, 'message' => $message ));	
    		}else{
    			echo json_encode(array('status'=> false , 'message' => 'Something went wrong.' ));
    		}
    	}else{
    		echo json_encode(array('status'=> false , 'message' => 'Something went wrong.' ));
    	}
    }
    
    /**
    *@uses function to delete user. 
    */
    public function userDelete(request $request){
    	if($request->user_id){
    		$update_records = array('is_delete' =>1, 'updated_at' => date('Y-m-d H:i:s'));  
    		$query = DB::table('users')->where('id', $request->user_id)->update($update_records);
    		if($query){
    			echo json_encode(array('status' => true, 'message' => 'User deleted successfully.'));
    		}else{
    			echo json_encode(array('status' => false, 'message' => 'Something went wrong'));
    		}
    	}
    }

    /**
    *@uses function to display edit user. 
    */
    public function userEditPage(Request $request, $id){
    	$data = DB::table('users')->where('id', $id)->first();
    	if($data){
    		$data->title = 'Edit User';
    		// echo '<pre>';
    		// print_r($data);
    		// echo '</pre>';

    		// dd();
    		return view('admin/users/edit', compact('data'));
    	}
    	
    }

    public function userEdit(){
    	
    }
}
