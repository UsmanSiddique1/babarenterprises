
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-editdpt">
                  Edit
</button>

<div class="modal fade" id="modal-default-editdpt">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary ">
              <h4 class="modal-title ">Edit Trader</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <form method="post" action="{{route('addmodal1')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">   
                  <div class="form-group col-md-12">
                    <input type="hidden" name="id" value="{{$de->id}}">
                    <label for="exampleInputEmail1">Trader Logo</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Trader Name</label>
                    <input type="text" class="form-control"  value="{{$de->tname}}" name="tname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control"  value="{{$de->phoneno}}" name="phoneno">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control"  value="{{$de->email}}" name="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Treder NTN</label>
                    <input type="text" class="form-control"  value="{{$de->ntn}}" name="ntn">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Treder STRN</label>
                    <input type="text" class="form-control"  value="{{$de->strn}}" name="strn">
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