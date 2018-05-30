<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> --}}
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/material-kit.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    <title></title>
  </head>
  <body>
    @yield('main')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="{{ asset('js/bootstrap-material-design.min.js')}}"></script>    
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{ asset('js/moment.min.js')}}"></script>  
    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>  
    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/nouislider.min.js')}}"></script>  
    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('js/bootstrap-selectpicker.js')}}"></script>  
    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{ asset('js/bootstrap-tagsinput.js')}}"></script>  
    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('js/jasny-bootstrap.min.js')}}"></script>  
    <!--    Plugin for Small Gallery in Product Page -->
    <script src="{{ asset('js/jquery.flexisel.js')}}"></script>  
    <!-- Plugins for presentation and navigation  -->
    <script src="{{ asset('js/modernizr.js')}}"></script>  
    <script src="{{ asset('js/vertical-nav.js')}}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{ asset('js/material-kit.min.js')}}"></script>  
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    @yield('script-main')
  </body>
</html>