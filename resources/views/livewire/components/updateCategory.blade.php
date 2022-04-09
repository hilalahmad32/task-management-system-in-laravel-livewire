{{-- update category model --}}
<div class="modal fade" wire:ignore.self id="updateCategory" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" wire:submit.prevent='update({{ $edit_id }})'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter Category Name</label>
                        <input type="text" wire:model.lazy="edit_category_name" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Description</label>
                        <textarea wire:model.lazy="edit_description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
