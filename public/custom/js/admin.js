
//addcustomerorder
	
//addvendororder
$('.addRow3').on('click', function(){
     
     addRow4();
	});
	function addRow4(){

		var tr ='<tr>'+ 
						
					   
						 '<td><input  class="form-control" type="text"  placeholder="Particular" name="particular[]"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Purchase Rate" name="prate[]"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Sale Rate" name="srate[]"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Amount" name="amount[]"></td>'+
	                       
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});