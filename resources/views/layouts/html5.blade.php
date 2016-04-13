<!doctype html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'The Grace Company')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('goodrelations')


        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{!! asset('/frontend/css/bootstrap.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/style.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/dark.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/font-icons.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/animate.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('/frontend/css/magnific-popup.css') !!}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/big-table.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/block.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/custom.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/custom-css/header.css') !!}">
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', '{!! $settings['ga_code']  or 'UA-64291412-1' !!}', 'auto');
          ga('send', 'pageview');
    </script>
    @yield('scripts')
    @yield('pp_header_scripts')
    </head>
    <body>
        <div id="wrapper" class="clearfix">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    @yield('submenu')
    @yield('slider')
    @yield('intro')
    @yield('page-title')
    @yield('sidebar')


        <!-- Add your site or application content here -->
        <p>Hello world! This is HTML5 Boilerplate.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore expedita natus ipsum, nam magnam esse voluptas enim fugit placeat quaerat assumenda dolorum temporibus harum incidunt et possimus maxime, earum voluptatem?</p>

        <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        </div>
    </body>
</html>
