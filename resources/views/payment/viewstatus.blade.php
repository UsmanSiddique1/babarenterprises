@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Payment Dtail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     
                    <th>Major Department</th>
                    <th>Sub Department</th>
                    <th>Sub Bill</th>
                    <th>Balance</th>
                    <th>Paid Bill</th>
                    <th>Remaing</th>
                    <th>Yes</th>
                    <th>Incomplete</th>
                    <th>No</th>
                    <th>More</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                     <td>Trident</td>
                     <td>Internet
                      Explorer 4.0
                     </td>
                     <td>Win 95+</td>
                     <td>a</td>
                     <td>a</td>
                     <td>a</td>
                     <td>a</td>
                     <td>a</td>
                     <td>a</td>
                     <td>a</td>
                  </tr>
                 
                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
                </div>
            </div>
            </div>
            </div>


           
    </section>
</div>
 

@endsection