<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! SEOMeta::generate() !!}
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
            <span class="loader-text">{{__('layout-main.to_our_world')}}</span>
        </div>
    </div>

    <div class="bg-overlay"></div>
    <div class="menu-fixed">
        <span class="ico-close menu-fixed_close-btn"></span>
        <div class="menu-fixed_body">
            <div class="menu-fixed_content">
                <ul class="head-menu">
                    <li><a href="{{route('about')}}">{{__('layout-main.about')}}</a></li>
                    <li><a href="{{route('services.index')}}">{{__('layout-main.services')}}</a></li>
                    <li><a href="{{route('contacts')}}">{{__('layout-main.contacts')}}</a></li>
                </ul>

                <x-socials-list class="fixed_social-network"/>
                <x-phone class="fixed_phone-number"/>

                <a href="#callback-2" data-toggle="modal" class="main-btn">{{__('layout-main.get_call')}}</a>
            </div>
        </div>
        <span class="menu-fixed_text">
            <span class="text">{{__('layout-main.menu')}}</span>
            <span class="text-2">{{__('layout-main.close')}}</span>
        </span>
    </div>
    <header class="ui-header">
        <div class="container">
            <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <x-socials-list class="tablet-small_hidden"/>
            <div class="head-logo">
                <a href="/">
                    <img data-src="{{asset('img/static/logo.svg')}}" alt="alt">
                </a>
            </div>
            <x-phone class="head_phone-number"/>
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
                        <a href="/">
                            <img data-src="{{asset('img/static/logo.svg')}}" alt="alt">
                        </a>
                    </div>
                    <x-socials-list class=""/>
                </div>
                <div class="main-footer_right-column">
                    <div class="row">

                        <x-services-menu/>
                        <div class="col-md-3 col-sm-6">
                            <ul class="footer-mod_menu">
                                <li><a href="/about">{{__('layout-main.about')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 right-cell">
                            <x-phone class="footer_phone-number"/>
                            <br>
                            <a href="#callback-2" data-toggle="modal" class="main-btn footer-callback">{{__('layout-main.get_call')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom-row">
                <div class="main-footer_left-column">
                    <div class="copyright">&#169; {{__('layout-main.company')}}</div>
                </div>
                <div class="main-footer_right-column">
                    <div class="row">
                        <div class="col-sm-9">
                            <ul class="footer_bottom_btn">
                                <li><a href="/user-agreement">{{__('layout-main.user_agreement')}}</a></li>
                                <li><a href="/privacy-policy">{{__('layout-main.privacy_policy')}}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 right-cell">
                            <a href="#application-accepted" data-toggle="modal" class="footer-studio">
                                <img data-src="{{asset('img/static/studio.svg')}}" alt="alt">
                            </a>
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
            <div class="section-title popup-title">{{__('form_requests.get_consult')}}</div>
            <form action="{{route('send-form')}}" class="callback-form" method="POST">
                <input type="hidden" name="form_result[title]" value="{{__('form_requests.get_consult')}}">
                <p class="send-status"></p>
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control requiredField callback-name" name="form_result[name]">
                    <label class="form-label">{{__('form_requests.name')}}</label>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control requiredField callback-phone" name="form_result[phone]">
                    <label class="form-label">{{__('form_requests.phone')}}</label>
                </div>
                <div class="popup-policy">
                    <label class="unified-checkbox">
                        <input value="" type="checkbox" name="checkbox" checked>
                        <span class="checkbox-text">{{__('form_requests.accept')}} <a href="/privacy-policy" target="_blank">{{__('form_requests.privacy')}}</a></span>
                    </label>
                </div>
                <div class="wrapper_popup-form_submit main-btn">
                    {{__('form_requests.send')}} <span class="ico-arrow"></span>
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
            <div class="section-title popup-title">{{__('form_requests.get_consult')}}</div>
            <form action="{{route('send-form')}}" class="callback-form" method="POST">
                <p class="send-status"></p>
                <input type="hidden" name="form_result[title]" value="{{__('form_requests.get_consult')}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control requiredField callback-name" name="form_result[name]">
                    <label class="form-label">{{__('form_requests.name')}}</label>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control requiredField callback-phone" name="form_result[phone]">
                    <label class="form-label">{{__('form_requests.phone')}}</label>
                </div>
                <div class="popup-policy">
                    <label class="unified-checkbox">
                        <input value="" type="checkbox" name="checkbox" checked>
                        <span class="checkbox-text">{{__('form_requests.accept')}} <a href="/privacy-policy" target="_blank">{{__('form_requests.privacy')}}</a></span>
                    </label>
                </div>
                <div class="wrapper_popup-form_submit main-btn">
                    {{__('form_requests.send')}} <span class="ico-arrow"></span>
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
            <p class="modal-text">{{__('form_requests.submitted')}}</p>
        </div>
    </div>
</div>
<!-- end application-accepted -->

</body>
</html>
