@extends('templates.admin')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Change Password</h2>
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
                    <form action="{{ URL::route('admin.edit_password') }}" name="edit_password_form" id="edit_password_form" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="old_password">Old Password: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" id="old_password" placeholder="Enter old password" name="old_password" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password: <span class="tx-danger">*</span></label>
                            <input type="text" class="form-control" id="new_password" placeholder="Enter new password" name="new_password">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password: <span class="tx-danger">*</span></label>
                            <input type="text"  class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <div class="mg-t-30">
                            <button class="btn ripple btn-primary pd-x-20 btn-block" id="btn_chn_passwrd">Submit</button>
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
<script src="{{ URL::asset('assets/scripts/admin/profile_setting.js') }}"></script>

@endsection

<!-- End Main Content-->
@endsection