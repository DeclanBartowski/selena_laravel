<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta content="browserconfig.xml" name="msapplication-config" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selena</title>
    <link href="{{asset('img/favicon.ico')}}" rel="icon" type="image/png" />
    <link href="{{asset('img/favicon.png')}}" rel="icon" type="image/png" />
    <link rel="apple-touch-icon" sizes="100x120" href="{{asset('img/apple-touch-icon.png')}}" />
    <style>body{opacity: 0;}</style>
    <link href="{{asset('css/min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    <script src="{{asset('js/min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy">{{__('404.old_browser')}}</p>
<![endif]-->
<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="logo-loader_content">
            <div class="logo-loader"></div>
        </div>
        <div class="wrapper_loader-text">
            <span class="loader-text">{{__('404.world')}}</span>
        </div>
    </div>

    <main class="main-content">
        <div class="error-section" style="background: url('{{asset('img/bg/404.jpg')}}') no-repeat center top;background-size: cover;">
            <div class="container">
                <div class="error-number section-title">{{__('404.404')}}</div>
                <p>{{__('404.no_page')}}</p>
                <a href="/" class="main-btn">{{__('404.to_index')}}</a>
            </div>
        </div>
    </main>

</div>


</body>
</html>
