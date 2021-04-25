$(document).ready(function() {

	$.ajaxSetup({
	  headers: {
	      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	if($('#users_table').length > 0){
		userdata();
	}
});


/* ******** code for get users ******** */
function userdata(){
	var table = $('#users_table').DataTable({
        processing: false,
        serverSide: true,
        destroy: true,
        ajax: $('#users_table').attr('data-action'), 
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {
            	data: '',
            	render: function(data, type, full,meta){
            		var first_name = last_name = '';
            		// console.log(full);
            		if(full.first_name != null){
            			var first_name = full.first_name;
            		}
            		if(full.last_name != null){
            			var last_name = full.last_name;
            		}
            		return first_name + ' '+ last_name;
            	},
            },
            // {data: 'first_name', name: 'first_name'},
            {data: 'email', name: 'email'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'status', name: 'status', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
	});
}
/* ********* code for change the status of the user ********* */
var userStatus = function(element,id, status){
	console.log($(element).attr('data-url'));
	var url = $(element).attr('data-url');
	if(id != '' && status != '' && url != '' ){
		$.ajax({
			url :url, 
			type:'post',
			data:{
				user_id:id,
				user_status:status
			},
			dataType: "json",
			success:function(data){
				if(data.status == true){
					$.toaster({ priority :'success', title :'Success', message :data.message, 'timeout': 2500});
					userdata();

				}else{
					$.toaster({ priority :'danger', title :'Success', message :data.message, 'timeout': 2500});
				}
			},
		});
	}
}

$(document).on('click', '.delete_user', function(){
	var user_id = $(this).attr('data-id');
	var url = $(this).attr('data-url');
	if(user_id){
		console.log(user_id);
		$.confirm({
	    title: 'Confirm!',
	    content: 'Are you sure want to delete this user?',
	    buttons: {
	        confirm: function () {
	        	$.ajaxSetup({
				  headers: {
				      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  }
				});
	        	$.ajax({
					url :url, 
					type:'post',
					data:{
						user_id:user_id,
					},
					dataType: "json",
					success:function(data){
						if(data.status == true){
							$.toaster({ priority :'success', title :'Success', message :data.message, 'timeout': 2500});
							userdata();

						}else{
							$.toaster({ priority :'danger', title :'Success', message :data.message, 'timeout': 2500});
						}
					},
				});
	        },
	        cancel: function () {
	            //$.alert('Canceled!');
	        }
	    }
		});
	}
});

/* ******************** User Edit Page script. ******************** */

/* ===== Validate edit form ===== */
$('#edit_user_form').validate({
	rules:{	
		name:{
			required: true,
			maxlength: 100,
		},
		last_name:{
			maxlength:50,
		},
		phone_number:{
			required:true,
			maxlength: 12,
		},
	},
	messages:{
		name:{
			required: 'Please first name name.',
		},
		phone_number:{
			required: 'Please enter phone number',
		},
	},
})
$(document).on('click', '#btn_update_usr', function(){

});