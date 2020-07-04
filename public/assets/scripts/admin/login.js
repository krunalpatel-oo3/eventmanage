$(document).ready(function(){
	/* Jquery validate */
	$('#form_login').validate({
		rules:{
			email:{
				required: true,
				email: true,
				remote: {
					url:  "<?php echo URL::to('restaurants/20'); ?>",
					type:'post',
					data:{
						email: function(){
							return
						}
					}
				},
			},
			password:{
				required: true,
			}
		}
	});
});