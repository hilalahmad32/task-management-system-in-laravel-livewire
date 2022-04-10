<div>
    <x-slot:title>
        User
        </x-slot>

        @include('livewire.components.createUser')
        @include('livewire.components.updateUser')

        <div class="container ">
            <div class="card my-4">
                <div class="card-header bg-danger">
                    <div class="d-flex justify-content-between">
                        <h3>User list</h3>
                        <button data-toggle="modal" data-target="#addUser" class="btn btn-secondary">Add
                            User</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex my-2">
                        <a href="{{ route('admin.userexportPDF') }}">
                            <button class="btn btn-secondary">PDF</button>

                        </a>
                        <button class="btn btn-secondary ml-3">Print</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($users))
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->fname }} {{ $user->lname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td><button wire:click='editUser({{ $user->id }})' data-toggle="modal"
                                                    data-target="#updateUser" class="btn btn-success">
                                                    <svg style="cursor: pointer; color: blue;" width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z" />
                                                    </svg></button></td>
                                            <td>
                                                <button wire:click='deleteUser({{ $user->id }})'
                                                    class="btn btn-danger">
                                                    <svg style="cursor: pointer; color: blue;" width="20" height="20"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path
                                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h2>Record not found</h2>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    {{ $users->links('custom-pagination-links-view') }}
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
                    "hideDuration": "500",
                    "timeOut": "1000",
                    "extendedTimeOut": "500",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            </script>
        @endif



</div>
