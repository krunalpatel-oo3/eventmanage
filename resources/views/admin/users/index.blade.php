

@extends('templates.admin')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">@if(isset($title)) {{ $title }} @endif</h2>
        </div>
    </div>
    
    <!-- Row -->
    <div class="row">
	<?php
	// foreach ($users as $key => $value) {
	// echo '<pre>';
	// print_r($value);
	// echo '</pre>';
	// }
	?>	
		<div class="table-responsive">
		<table class="table table-bordered table-striped" id="users_table" data-action="{{ route('admin.users') }}" style="width:100%">
			<thead>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No.</th>
				<th>Status</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<!-- @if(isset($users) && !empty($users))
				@foreach($users as $user)
				<tr>
					<td>@if(isset($user->id)) {{ $user->id }} @endif</td>
				</tr>
				@endforeach
				@endif -->
				<!-- <tr>
					<td colspan="5" class="text-center"><i class="fa fa-spin"></i> Loading...</td>
				</tr> -->
			</tbody>
		</table>
   		</div>
     
    </div>
    <!-- End Row-->
</div>
@section('extra-script')
<!-- Toastr -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<!-- Form-validation js-->  
<script src="{{ URL::asset('assets/plugins/jquery-validate/jquery.validate.min.js') }} "></script>

<!-- Datatable-->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.css') }} ">
<script src="{{ URL::asset('assets/plugins/datatable/jquery.dataTables.min.js') }} "></script>

<!--Bootstrap -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
<script src="{{ URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<!-- Users js -->
<script src="{{ URL::asset('assets/scripts/admin/users.js') }}"></script>

@endsection

@section('extra-style')
	<style type="text/css">
		#users_table_wrapper label, #users_table_info, a.page-link {
			color: white !important;
		}
	</style>	
@endsection
<!-- End Main Content-->
@endsection