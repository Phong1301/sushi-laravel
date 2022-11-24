<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminstyle.css') }}">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--=============== BOOTSTRAP ===============-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!--=============== DATATABLES ===============-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>
 

    <title>Admin Dashboard</title>
</head>
<body>
    
    @include('layouts.admin.inc.nav.sidebar');

    <section class="dashboard">
        @include('layouts.admin.inc.nav.top');

        @yield('content')
    </section>


    <script src="{{ asset('assets/js/adminscript.js') }}"></script>

    <!--=============== BOOTSTRAP ===============-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    
    <!--=============== JQUERY ===============-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!--=============== DATATABLES ===============-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.js"></script>

    <!--=============== SWAL ===============-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        
    </script>

</body>
</html>
