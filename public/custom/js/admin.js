$('.medicine').on('click', function(){
     
     medicine_addRow();
  });
  function medicine_addRow(){

    var tr ='<tr>'+ 
          
            '<td><input  class="form-control" type="text"  placeholder="Product & Service Name" name="product[]"></td>'+
            '<td><a href="#" onclick="event.preventDefault()" class="btn btn-danger medicine_remove">Remove</a></td>'+
            
          '</tr>';
          $('.medicine-tbody').append(tr); 
  };

  $('tbody').on('click', '.medicine_remove', function(){
       $(this).parent().parent().remove();

  });

$('.medicine1').on('click', function(){
     
     medicine1_addRow();
  });
  function medicine1_addRow(){

    var tr ='<tr>'+ 
          
           '<td><input  class="form-control" type="text"  placeholder="Product & Category Name" name="category[]"></td>'+
            '<td><a href="#" onclick="event.preventDefault()" class="btn btn-danger medicine1_remove">Remove</a></td>'+
            
          '</tr>';
          $('.medicine1-tbody').append(tr); 
  };

  $('tbody').on('click', '.medicine1_remove', function(){
       $(this).parent().parent().remove();

  });