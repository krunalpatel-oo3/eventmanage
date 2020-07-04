$(document).ready(function(){
	/* Jquery validate */
	$('#form_login').validate({
		rules:{
			email:{
				required: true,
				email: true,
				remote: {
					url:'',
					type:'post',
					
				},
			},
			password:{
				required: true,
			}
		}
	});
});