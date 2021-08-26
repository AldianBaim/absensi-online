<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <title>Aplikasi Absensi Berbasis Lokasi</title>
</head>

<body>

    @include('user.navbar')

    <div class="container">

        <div class="content mt-5 col-md-4 offset-md-4">
            @yield('content')
        </div>
    </div>

    <div id="footer">
        <div class="text-center">
            Copyright &copy; 2021 Alfian Pratama
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sbadmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>


</body>

</html>