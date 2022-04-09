<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - {{ $title }}</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    @livewireStyles
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @livewire('components.navbar')

    <div id="layoutSidenav">
        @livewire('components.sidebar')
        <div id="layoutSidenav_content">
            <main>
                {{ $slot }}
            </main>
            <footer class="py-4 bg-danger mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Developed by Hilal ahmad</div>
                        < </div>
                    </div>
            </footer>
        </div>
    </div>

    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script>
        window.livewire.on('addCategory', function() {
            $('#addCategory').modal('hide');
        })
        window.livewire.on('updateCategory', function() {
            $('#updateCategory').modal('hide');
        })
        window.livewire.on('addUser', function() {
            $('#addUser').modal('hide');
        })
        window.livewire.on('updateUser', function() {
            $('#updateUser').modal('hide');
        })
        window.livewire.on('addTasks', function() {
            $('#addTasks').modal('hide');
        })
        window.livewire.on('updateTasks', function() {
            $('#updateTasks').modal('hide');
        })
    </script>

</body>

</html>