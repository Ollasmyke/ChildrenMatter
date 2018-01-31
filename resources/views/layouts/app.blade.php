<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Children Matters</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i')}}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('css/resume.css')}}" rel="stylesheet">
    <link href="{{ asset('css/children_matter.css') }}" rel="stylesheet">
    @yield('pagecss')
    

</head>

<body id="page-top">

@include('partials.sidebarIndex')
@yield('content')

 <!-- Bootstrap core JavaScript -->
    <script src=" {{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src=" {{ asset('js/bootstrap.min.js') }}"></script>
     <script src=" {{ asset('js/mdb.min.js') }}"></script>
     @yield('pagejs')

    <!-- Plugin JavaScript -->

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/resume.min.js') }}"></script>

</body>

</html>