
//addcustomerorder
	$('.addRow2').on('click', function(){
     
     addRow3();
	});
	function addRow3(){

		var tr ='<tr>'+ 
						
					   
						  '<td><select class="form-control"  style="width: auto;" name="category[]"><option value="" selected="">status</option><option>Sofa</option><option>Chair</option><option>Set</option></select></td>'+
                        '<td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]"style="width: auto;"></td>'+
                       
	                       
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});
//addvendororder
$('.addRow3').on('click', function(){
     
     addRow4();
	});
	function addRow4(){

		var tr ='<tr>'+ 
						
					   
						 '<td><input  class="form-control" type="text"  placeholder="Particular" name="particular[]" style="width: auto;"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]"style="width: auto;"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Rate" name="rate[]" style="width: auto;"></td>'+
                         '<td><input  class="form-control" type="text"  placeholder="Amount" name="amount[]" style="width: auto;"></td>'+
	                       
						'<td><a href="#" class="btn btn-danger remove">Remove</a></td>'+
						
					'</tr>';
					$('tbody').append(tr); 
	};

	$('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

	});