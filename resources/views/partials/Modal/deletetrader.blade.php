
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default-delete">
      </div>
                   Delete
</button>

<div class="modal fade" id="modal-default-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary ">
              <h4 class="modal-title ">Delete Trader</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>Do you Want Delete This Person?</h3>
             

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
              <a href="{{url('delete/'.$de->id)}}"  class="btn btn-primary">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>