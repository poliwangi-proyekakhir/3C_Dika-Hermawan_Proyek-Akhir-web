<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('resources/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/assets/css/styless.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

</head>
<body>

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>
    </div>

    <script src="{{ asset('public/assets/js/jquery-3.6.0.min.js') }}"></script>


    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.js') }}"></script>


    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#tabelData').DataTable();
        } );
    </script>

    <script>

        $("#datepicker").datepicker( {
            format: "mm-yyyy",
            startView: "months", 
            minViewMode: "months"
        });
        
        
    </script>

</body>
</html>
