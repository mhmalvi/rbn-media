<!-- Modal -->
<div class="modal fade" id="tagEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('admin.tag.update')}}" method="post" id="tagEditForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="slug" id="slug">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter new tag here...">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('tagEditForm').submit();">
                Save changes
            </button>
        </div>
        </div>
    </div>
</div>