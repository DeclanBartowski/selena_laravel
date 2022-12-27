<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
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

    <div class="bg-overlay"></div>
    <div class="menu-fixed">
        <span class="ico-close menu-fixed_close-btn"></span>
        <div class="menu-fixed_body">
            <div class="menu-fixed_content">
                <ul class="head-menu">
                    <li><a href="">О проекте</a></li>
                    <li><a href="">Услуги</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
                <ul class="social-network fixed_social-network">
                    <li><a href="mailto:"><img data-src="img/icons/social/01.svg" alt="alt"></a></li>
                    <li><a href="" target="_blank"><img data-src="img/icons/social/02.svg" alt="alt"></a></li>
                    <li><a href="" target="_blank"><img data-src="img/icons/social/03.svg" alt="alt"></a></li>
                </ul>
                <a href="tel:+79097907117" class="fixed_phone-number"><span class="ico-phone"></span>+7 (909) 790-71-17</a>
                <a href="#callback-2" data-toggle="modal" class="main-btn">Заказать звонок</a>
            </div>
        </div>
        <span class="menu-fixed_text"><span class="text">Меню</span><span class="text-2">закрыть</span></span>
    </div>
    <header class="ui-header">
        <div class="container">
            <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <ul class="social-network tablet-small_hidden">
                <li><a href="mailto:"><img data-src="img/icons/social/01.svg" alt="alt"></a></li>
                <li><a href="" target="_blank"><img data-src="img/icons/social/02.svg" alt="alt"></a></li>
                <li><a href="" target="_blank"><img data-src="img/icons/social/03.svg" alt="alt"></a></li>
            </ul>
            <div class="head-logo">
                <a href=""><img data-src="img/static/logo.svg" alt="alt"></a>
            </div>
            <a href="tel:+79097907117" class="head_phone-number"><span class="ico-phone"></span>+7 (909) 790-71-17</a>
        </div>
    </header>


    <!-- END UI-HEADER -->
    <main class="main-content">
        @yield('content')
        @include('forms.request')

    </main>
    <!-- end main-content -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="main-footer_left-column">
                    <div class="footer-logo">
                        <a href=""><img data-src="img/static/logo.svg" alt="alt"></a>
                    </div>
                    <ul class="social-network">
                        <li><a href="mailto:"><img data-src="img/icons/social/01.svg" alt="alt"></a></li>
                        <li><a href="" target="_blank"><img data-src="img/icons/social/02.svg" alt="alt"></a></li>
                        <li><a href="" target="_blank"><img data-src="img/icons/social/03.svg" alt="alt"></a></li>
                    </ul>
                </div>
                <div class="main-footer_right-column">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="footer-title"><a href="">Услуги</a></div>
                            <ul class="footer-menu">
                                <li><a href="">Трансактный анализ</a></li>
                                <li><a href="">Тета-Хилинг</a></li>
                                <li><a href="">Ведическая астрология - Джйотиш</a></li>
                                <li><a href="">Западная астрология</a></li>
                                <li><a href="">Системные расстановки</a></li>
                                <li><a href="">Васту</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <ul class="footer-mod_menu">
                                <li><a href="/about">О проекте</a></li>
                                <li><a href="">Мой кабинет</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 right-cell">
                            <a href="tel:+79097907117" class="footer_phone-number"><span class="ico-phone"></span>+7 (909) 790-71-17</a> <br>
                            <a href="#callback-2" data-toggle="modal" class="main-btn footer-callback">Заказать звонок</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom-row">
                <div class="main-footer_left-column">
                    <div class="copyright">&#169; Компания, Selena</div>
                </div>
                <div class="main-footer_right-column">
                    <div class="row">
                        <div class="col-sm-9">
                            <ul class="footer_bottom_btn">
                                <li><a href="/user-agreement">Пользовательское соглашение</a></li>
                                <li><a href="/privacy-policy">Политика конфиденциальности</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 right-cell">
                            <a href="#application-accepted" data-toggle="modal" class="footer-studio"><img data-src="img/static/studio.svg" alt="alt"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end main-footer -->
    <div class="scroll-to-top"></div>
</div>
<!-- END GLOBAL-WRAPPER -->
<div aria-hidden="true" class="modal fade js-modal" id="callback" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
            <div class="section-title popup-title">Получить консультацию</div>
            <form action="#" class="callback-form">
                <div class="form-group">
                    <input type="text" class="form-control requiredField callback-name">
                    <label class="form-label">Имя</label>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control requiredField callback-phone">
                    <label class="form-label">Телефон</label>
                </div>
                <div class="popup-policy">
                    <label class="unified-checkbox">
                        <input value="" type="checkbox" name="checkbox" checked>
                        <span class="checkbox-text">Я принимаю условия <a href="">политики конфиденциальности</a></span>
                    </label>
                </div>
                <div class="wrapper_popup-form_submit main-btn">
                    Отправить <span class="ico-arrow"></span>
                    <input type="submit" class="popup-form_submit js_form-submit" value="">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end callback -->
<div aria-hidden="true" class="modal fade js-modal" id="callback-2" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
            <div class="section-title popup-title">Заказать звонок</div>
            <form action="#" class="callback-form">
                <div class="form-group">
                    <input type="text" class="form-control requiredField callback-name">
                    <label class="form-label">Имя</label>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control requiredField callback-phone">
                    <label class="form-label">Телефон</label>
                </div>
                <div class="popup-policy">
                    <label class="unified-checkbox">
                        <input value="" type="checkbox" name="checkbox" checked>
                        <span class="checkbox-text">Я принимаю условия <a href="">политики конфиденциальности</a></span>
                    </label>
                </div>
                <div class="wrapper_popup-form_submit main-btn">
                    Отправить <span class="ico-arrow"></span>
                    <input type="submit" class="popup-form_submit js_form-submit" value="">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end callback-2 -->
<div aria-hidden="true" class="modal fade js-modal"  role="dialog" id="application-accepted">
    <div class="modal-dialog modal-mod_dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" type="button"><span class="ico-close"></span></button>
            <span class="ico-check popup-check"></span>
            <p class="modal-text">Ваша заявка успешно отправлена!</p>
        </div>
    </div>
</div>
<!-- end application-accepted -->

</body>
</html>
