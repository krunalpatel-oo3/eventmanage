$(document).ready(function(){
	 var _token = $("input[name='_token']").val();
	/* Jquery validate */
	$('#form_login').validate({
		rules:{
			email:{
				required: true,
				email: true,
				remote: {
					url:  $('input[name="email_exist_url"]').val(),
					type:'post',
					data:{
						_token :$('meta[name="csrf-token"]').attr('content')
					},

				},
			},
			password:{
				required: true,
			}
		},
		messages: {
			email :{
				remote : "Invalid email address.",
			}
		},
		submitHandler:function(form, e){
			
			console.log('Form submitted');
			loginProcess(form);
		}
	});
});
/* code for login process for super admin */
$(document).ready(function(){
});
function loginProcess(form){
	
	var email    = $('input[name="email"]').val();
	var password = $('input[name="password"]').val();
	
	$.ajax({
		url:$('#form_login').attr('action'),
		type:'POST',
		data:{
			_token :$('meta[name="csrf-token"]').attr('content'),
			email: email,
			password:password
		},
		dataType:"JSON",
		beforeSend: function(){
			console.log('beforeSend');
			$('.btn-block').attr('disabled', true);
		},
		success:function(data){
			if(data.status == 'true'){
				$.toaster({ priority :'success', title :'success', message :data.message, 'timeout': 2500});
				setTimeout(function(){
					window.location.href = base_url + '/admin/dashboard'
				});

			}else if(data.status == 'false'){
				console.log(data);
				$.toaster({ priority :'success', title :'Warning', message :data.message, 'timeout': 2500});
				$('.btn-block').attr('disabled', false);
			}else{
				location.reload();
			}
		}
	});

}