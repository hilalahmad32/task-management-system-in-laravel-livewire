<div>
    <x-slot:title>
        Change Password
        </x-slot>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h2>Change Password</h2>
                        </div>
                        <form action="" wire:submit.prevent='changePassword'>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Enter Username</label>
                                    <input type="text" wire:model.lazy='username' class="form-control">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Enter New Password</label>
                                    <input type="password" wire:model.lazy='password' class="form-control">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger">Change Password</button>
                                </div>
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

            @if (session()->has('error'))
                <script>
                    Command: toastr["error"]("{!! session('error') !!}")

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
</div>
