<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/ruang-admin.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css2/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/stylereg.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css2/responsive.css') }}" rel="stylesheet">
    
    <link type="text/css" href="{{asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('static/css/theme.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('static/images/icons/css/font-awesome.css') }}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    @include('common.script_top')

</head>
<body>
@include('layout.template_navbar')

<div style="padding: 20px">
        <div class="row">
            @include('layout.template_leftbar')
            <div class="span10">
                <div style="margin-left: 30px">
                    @include('account.message')

                </div>
                @yield('content')
            </div>
        </div>
</div>

@include('account.navigation_bottom')
    

<script src="{{asset('static/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('js2/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{asset('js2/chart-area-demo.js') }}" type="text/javascript"></script>
<script src="{{asset('static/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('static/scripts/underscore-min.js') }}" type="text/javascript"></script>
<script src="{{asset('static/custom/js/script.common.js') }}" type="text/javascript"></script>

@include('common.script_bottom')

<script type="text/template" id="alert_box">
    @include('underscore.alert_box')
</script>

<script>
    $(document).ready(function(){ 
    $("input").attr("autocomplete", "off");
});
</script>

</body>
</html>