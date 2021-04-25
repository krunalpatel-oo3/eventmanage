$(document).ready(function(){
	/* form validate of profile form. */
	if($('#profile_form').length > 0 ){
		$('#profile_form').validate({
			rules: {
				uname:{
					required: true,
				},
			},
			messages:{
				uname:{
					required: 'Please enter username'
				}
			},
			submitHandler: function(form){
				editProfileForm(form);
			}
		});
	}
});
/* code for edit profile details */
function editProfileForm(form){
	
	var form = $("#profile_form");
    var formData = new FormData(form[0]);
    var file = $('#profile')[0].files[0];
    formData.append('profile', file);
	// return false;
	$.ajax({
		url:$('#profile_form').attr('action'),
		type:'POST',
		data: formData,
		dataType:"JSON",
		cache:false,
		contentType: false,
    	processData: false,
    	beforeSend: function(){
    		$('#btn_submit').attr('disabled', true);
    		$('#btn_submit').html('<i class="fa fa-spinner fa-spin"></i> Submit');
    	},
    	success: function(data){
    		if(data.status == true){
    			// alert('Data Inserted successfully.');
    			$.toaster({ priority :'success', title :'', message :data.message, 'timeout': 2500});
    			setTimeout(function(){
    				location.reload();
    			}, 1000); 
    		}else{
    			$('#btn_submit').attr('disabled', false);
    			$('#btn_submit').html('Submit');
    			$.toaster({ priority :'success', title :'', message :data.message, 'timeout': 2500});
    			$('#message').removeClass('d-none');
    			$('#message').html(data.message);
    			$('#message').addClass(data.class_name);
    			// alert('Something went wrong');
    		}
    	},

	});
}

/* code for validate change password. */
if($('#edit_password_form').length >0){
	$('#edit_password_form').validate({
		rules:{
			old_password:{
				required:true,
			},
			new_password:{
				required:true,
				maxlength: 8
			},
			confirm_password:{
				required:true,
			},
		},
		messages:{
			old_password:{
				required:"Please enter old password"
			},
			new_password:{
				required:"Please enter new password"
			},
			confirm_password:{
				required:"Please enter confirm password"
			},
		},
		submitHandler: function(){
			edit_password();
		}
	});
}

/* code for edit password.*/
function edit_password(){
	// var form = $('#edit_password_form');	
	// var formData = new FormData(form[0]);

	var form = $("#edit_password_form");
    var formData = new FormData(form[0]);
    
	$.ajax({
		type:'post',
		url: $('#edit_password_form').attr('action'),
		dataType:'JSON',
		data:formData,
		cache:false,
		contentType: false,
    	processData: false,
		beforeSend: function(){
    		$('#btn_chn_passwrd').attr('disabled', true);
    		$('#btn_chn_passwrd').html('<i class="fa fa-spinner fa-spin"></i> Submit');
    	},
		success: function(data){
			console.log(data);
			if(data.status == true){
				$.toaster({ priority :'success', title :'Success', message :data.message, 'timeout': 2500});
				setTimeout(function(){
					window.location.href = base_url + '/'+data.redirect_url;
				},1000);
			}else{
				$('#btn_chn_passwrd').attr('disabled', false);
    			$('#btn_chn_passwrd').html('Submit');
    			$.toaster({ priority :'warning', title :'Warning', message :data.message, 'timeout': 2500});
    			$('#message').removeClass('d-none');
    			$('#message').html(data.message);
    			$('#message').addClass(data.class_name);
			}
		}
	});
}

