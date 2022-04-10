<div>
    <x-slot:title>
        Update Profile
        </x-slot>
        <div class="container ">
            <div class="card my-4">
                <div class="card-header">
                    <h3>Edit Profile</h3>
                </div>
                <div class="card-body">
                    <form action="" wire:submit.prevent='update'>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Enter Compnay Name</label>
                                <input type="text" wire:model.lazy='c_name' class="form-control">
                                @error('c_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Enter Full Name</label>
                                <input type="text" wire:model.lazy='fullname' class="form-control">
                                @error('fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Enter Email</label>
                                <input type="email" wire:model.lazy='email' class="form-control">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Enter Phone</label>
                                <input type="text" wire:model.lazy='phone' class="form-control">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Enter Address</label>
                                <input type="text" wire:model.lazy='address' class="form-control">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Enter Username</label>
                                <input type="text" wire:model.lazy='username' class="form-control">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        @if (session()->has('success'))
            <script>
                Command: toastr["success"]("{!! session('success') !!}")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            </script>
        @endif



</div>
