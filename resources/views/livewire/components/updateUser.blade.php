 {{-- update Users model --}}
 <div class="modal fade" wire:ignore.self id="updateUser" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="" wire:submit.prevent='update({{ $edit_id }})'>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="">Enter First Name</label>
                         <input type="text" wire:model.lazy='edit_fname' class="form-control">
                         @error('edit_fname')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>

                     <div class="form-group">
                         <label for="">Enter Last Name</label>
                         <input type="text" wire:model.lazy='edit_lname' class="form-control">
                         @error('edit_lname')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="">Enter Email</label>
                         <input type="email" wire:model.lazy='edit_email' class="form-control">
                         @error('edit_email')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="">Enter Phone</label>
                         <input type="text" wire:model.lazy='edit_phone' class="form-control">
                         @error('edit_phone')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
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
