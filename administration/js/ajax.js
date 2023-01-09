$(document).ready(function(){	
	
	var dataRecords = $('#recordListing').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',		
		"order":[],
		"ajax":{
			url:"includes/logic/ajax_action.php",
			type:"POST",
			data:{action:'listRecords'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable":false,
			},
		],
		"pageLength": 10
	});	
	
	$('#addRecord').click(function(){
		$('#recordModal').modal('show');
		$('#recordForm')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Add Record");
		$('#action').val('addRecord');
		$('#save').val('Add');
	});		
	$("#recordListing").on('click', '.update', function(){
		var id = $(this).attr("id");
		var action = 'getRecord';
		$.ajax({
			url:'includes/logic/ajax_action.php',
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data){
				$('#recordModal').modal('show');
				$('#id').val(data.id);
				$('#name').val(data.name);
				$('#age').val(data.age);
				$('#skills').val(data.skills);				
				$('#address').val(data.address);
				$('#designation').val(data.designation);	
				$('.modal-title').html("<i class='fa fa-plus'></i> Edit Records");
				$('#action').val('updateRecord');
				$('#save').val('Save');
			}
		})
	});
	$("#recordModal").on('submit','#recordForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"includes/logic/ajax_action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#recordForm')[0].reset();
				$('#recordModal').modal('hide');				
				$('#save').attr('disabled', false);
				dataRecords.ajax.reload();
			}
		})
	});		
	$("#recordListing").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "deleteRecord";
		if(confirm("Are you sure you want to delete this record?")) {
			$.ajax({
				url:"includes/logic/ajax_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(data) {					
					dataRecords.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
});

//add loan

///// start of logincription scripts

$("#add_loan_form").submit(function(event) {

    /* Stop form from submitting normally */
    event.preventDefault();

            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                
                } catch (event) {
                    
                }

                if (responseObject) {
                    handleResponse(responseObject);
                }
            };
           
 /* Clear result div*/
 $("#resultloans").html('');



            const requestData = $(this).serialize();

            request.open('post', 'includes/logic/add_loan.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });
  
        function handleResponse (responseObject) {
            if (responseObject.ok) {

                               
                // Show successfully for submit message
         $("#resultloans").html('<div class="alert alert_style1 alert-success" role="alert"><i class="ti-gift"></i> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+responseObject.messages+'</div>');

            } else {

                        
                   // Show error
      $("#resultloans").html('<div class="alert alert_style1 alert-danger" role="alert"><i class="ion-close-circled"></i> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> '+responseObject.messages+'</div>');


            }
        }
//////////// end of loginription scripts