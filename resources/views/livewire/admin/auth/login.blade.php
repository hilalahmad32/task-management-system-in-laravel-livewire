<div>
    <x-slot:title>
        Login
        </x-slot>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header bg-danger">
                            <h2>Admin Login</h2>
                        </div>
                        <form action="" wire:submit.prevent='login'>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Enter Username</label>
                                    <input type="text" wire:model.lazy='username' class="form-control">
                                    @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Enter Password</label>
                                    <input type="password" wire:model.lazy='password' class="form-control">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-danger">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>
