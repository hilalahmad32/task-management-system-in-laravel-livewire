{{-- update tasks model --}}
<div class="modal fade" wire:ignore.self id="updateTasks" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Tasks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" wire:submit.prevent='update({{ $edit_id }})'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Enter Title</label>
                        <input type="text" wire:model.lazy='edit_title' class="form-control form-control-lg">
                        @error('edit_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Enter Category</label>
                        <select wire:model.lazy='edit_cat_id' class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        @error('edit_cat_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Enter Description</label>
                        <textarea wire:model.lazy='edit_description' cols="30" rows="4" class="form-control"></textarea>
                        @error('edit_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Enter Status</label>
                        <select wire:model.lazy='edit_status' class="form-control">
                            <option value="0">Not started</option>
                            <option value="1">Started</option>
                            <option value="2">Pending</option>
                            <option value="3">Complete</option>
                        </select>
                        @error('edit_status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Enter Start Date</label>
                        <input type="date" wire:model.lazy='edit_start_date' class="form-control form-control-lg">
                        @error('edit_start_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Enter End Date</label>
                        <input type="date" wire:model.lazy='edit_end_date' class="form-control form-control-lg">
                        @error('edit_end_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Enter Users</label>
                        <select wire:model.lazy='edit_user_id' class="form-control">
                            <option value="">Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                            @endforeach
                        </select>
                        @error('edit_user_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
