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
				remote : "Please eneter valid email add",
			}
		}
	});
});