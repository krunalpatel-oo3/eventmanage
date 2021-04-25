@extends('templates.admin')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div>
        	<?php
        	echo "<pre>"; 
        	print_r($data);
        	echo "</pre>"; 
        	?>
            <h2 class="main-content-title tx-24 mg-b-5">@if(isset($data->title)) {{ $data->title }} @endif</h2>
        </div>
    </div>
    
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">

                <div class="card-body">
                    <div class="alert d-none" id="message">
                        <h6 class="card-title mb-1">Custom Style Invalid Messages</h6>
                       
                    </div>
                    <form action="{{ URL::route('admin.edit_user') }}" name="edit_password_form" id="edit_user_form" method="POST">
                            {{ csrf_field() }}



                    <div class="row">
				        <div class="col-sm-4 text-center">
				            <div class="kv-avatar">
				                <div class="file-loading">
				                    <input id="avatar-1" name="avatar-1" type="file" required>
				                </div>
				            </div>
				            <div class="kv-avatar-hint">
				                <small>Select file < 1500 KB</small>
				            </div>
				        </div>
				        <div class="col-sm-8">
				            <div class="row">
				                <div class="col-sm-6">
				                    <div class="form-group">
				                        <label for="email">Email Address<span class="kv-reqd">*</span></label>
				                        <input type="email" class="form-control" name="email" required>
				                    </div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group">
				                        <label for="pwd">Password<span class="kv-reqd">*</span></label>
				                        <input type="password" class="form-control" name="pwd" required>
				                    </div>
				                </div>
				            </div>
				            <div class="row">
				                <div class="col-sm-6">
				                    <div class="form-group">
				                        <label for="name">Name: <span class="tx-danger">*</span></label>
				                        <input type="text" class="form-control" id="name" placeholder="Enter First Name" name="first_name" value="@if(isset($data->first_name)) {{ $data->first_name }} @endif" required>
				                    </div>
				                </div>
				                <div class="col-sm-6">
				                    <div class="form-group">
				                        <label for="last_name">Last Name</label>
				                        last_name
				                        <input type="text" class="form-control" id="name" placeholder="Enter Last Name" name="name" value="@if(isset($data->last_name)) {{ $data->last_name }} @endif" required>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <hr>
				                <div class="text-right">
				                    <button type="submit" class="btn btn-primary">Submit</button>
				                </div>
				            </div>
				        </div>
				    </div>    



                        <div class="form-group">
                            <label for="name">Name: <span class="tx-danger">*</span></label>
                           
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="@if(isset($data->email)) {{ $data->email }} @endif" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" value="@if(isset($data->phone_number)) {{ $data->phone_number }} @endif">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="profile_file">Profile</label>
                        	<input type="file" name="profile" >	
                        </div>

                        <div class="mg-t-30">
                            <button class="btn ripple btn-primary pd-x-20" id="btn_update_usr">Update</button>
                            <button class="btn ripple btn-primary pd-x-20" id="btn_update_exist">Update & Exit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    </div>
    <!-- End Row-->
</div>
@section('extra-script')
<!-- Form-validation js-->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  
<script src="{{ URL::asset('assets/plugins/jquery-validate/jquery.validate.min.js') }} "></script>
<script src="{{ URL::asset('assets/scripts/admin/users.js') }}"></script>

@endsection

<!-- End Main Content-->
@endsection