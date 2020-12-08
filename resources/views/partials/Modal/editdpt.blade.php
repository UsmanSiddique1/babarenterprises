
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-editdpt">
                  Edit
</button>

<div class="modal fade" id="modal-default-editdpt">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary ">
              <h4 class="modal-title ">Edit Subdepartment</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <form method="post" action="{{route('add_modal')}}">
                  @csrf
                  <div class="row">
                <input type="hidden" name="id" value="{{$s->id}}">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1"> Dept Name</label>
                    <input type="text" class="form-control"  name="sname" value="{{$s->sname}}">
                  </div>
               
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Phone No</label>
                    <input type="text" class="form-control"  name="phoneno" value="{{$s->phoneno}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control"  name="email" value="{{$s->email}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  name="address" value="{{$s->address}}">
                  </div>

                </div>
                  
                 <button class="btn btn-primary mt-3">Submit</button>
               
              </form>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>