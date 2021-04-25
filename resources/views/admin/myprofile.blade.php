@extends('templates.admin')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">My Profile</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
            </ol>
        </div>
    </div>
    
    <!-- Row -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card custom-card">

                <div class="card-body">
                    <div class="alert d-none" id="message">
                        <h6 class="card-title mb-1">Custom Style Invalid Messages</h6>
                       
                    </div>
                    <form action="{{ URL::route('admin.editprofile') }}" name="profile_form" id="profile_form" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="uname">Username: <span class="tx-danger">*</span></label>
                            <input type="text" value="{{ $user_data->name }}" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email: <span class="tx-danger">*</span></label>
                            <input type="text"  value="{{ $user_data->email }}" class="form-control" id="email" placeholder="Enter username" name="email">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="upload_profile">Profile Photo.</label>
                                    <input type="file" name="profile" id="profile" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ URL::asset('admin_profile/').'/'.$user_data->profile_img }}" class="img-thumbnail cust_img">
                            </div>
                        </div>
                        
                        <div class="mg-t-30">
                            <button class="btn ripple btn-primary pd-x-20 btn-block" id="btn_submit">Submit</button>
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
<script src="{{ URL::asset('assets/plugins/jquery-validate/jquery.validate.min.js') }} "></script>
<script src="{{ URL::asset('assets/scripts/admin/profile_setting.js') }}"></script>

@endsection

<!-- End Main Content-->
@endsection