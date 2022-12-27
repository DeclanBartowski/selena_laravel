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
<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер.
    Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного
    отображения сайтов.</p>
<![endif]-->
<div class="global-wrapper">
    <div class="wrapper-loader">
        <div class="logo-loader_content">
            <div class="logo-loader"></div>
        </div>
        <div class="wrapper_loader-text">
            <span class="loader-text">Погрузитесь в наш мир</span>
        </div>
    </div>

    <main class="main-content">
        <div class="error-section" style="background: url('{{asset('img/bg/404.jpg')}}') no-repeat center top;background-size: cover;">
            <div class="container">
                <div class="error-number section-title">404</div>
                <p>Извините, такой страницы нет</p>
                <a href="/" class="main-btn">Перейти на главную</a>
            </div>
        </div>
    </main>

</div>


</body>
</html>
