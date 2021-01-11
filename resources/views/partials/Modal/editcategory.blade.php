
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default-{{$med->id}}">
                  Edit Product & Category
</button>

<div class="modal fade" id="modal-default-{{$med->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Product & Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('editcategorys')}}">
                  @csrf
                <input type="hidden" name="id" value="{{$med->id}}">
                <input type="text" name="category" class="form-control" value="{{$med->category}}">
                <button class="btn btn-primary mt-3">Edit Product & Category</button>
                
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>