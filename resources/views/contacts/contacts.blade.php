@extends('layouts.main')
@section('content')

    <div class="contact-section">
        <div class="container">
            @include('layouts.breadcrumbs')
            <h1 class="line-title">{{__('contacts.title')}}</h1>
            @isset($contacts->text)
                <span class="top-text">{{$contacts->text}}</span>
            @endisset
            @isset($contacts->map[0], $contacts->map[1])
                <div id="map"></div>
                <script>
                    $(function () {
                        if ($('#map').length) {

                            function showYaMaps() {
                                var script = document.createElement("script");
                                script.type = "text/javascript";
                                script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
                                document.getElementById("map").appendChild(script);
                                script.onload = function () {
                                    ymaps.ready(init);
                                    var myMap,
                                        myPlacemark;

                                    function init() {
                                        myMap = new ymaps.Map("map", {
                                            center: [parseFloat({{$contacts->map[0]}}),{{$contacts->map[1]}}],
                                            zoom: 16,
                                            behaviors: ['default', 'scrollZoom'],
                                        });
                                        myMap.behaviors.disable('scrollZoom');
                                        myMap.controls.remove('geolocationControl');
                                        myMap.controls.remove('searchControl');
                                        myMap.controls.remove('trafficControl');
                                        myMap.controls.remove('typeSelector');
                                        myMap.controls.remove('fullscreenControl');
                                        myMap.controls.remove('rulerControl');
                                        myMap.behaviors.disable('scrollZoom');
                                        myMap.geoObjects.add(new ymaps.Placemark([{{$contacts->map[0]}},{{$contacts->map[1]}}], {
                                            balloonContent: '{{$contacts->address ?? ''}}',
                                        }, {
                                            iconLayout: 'default#image',
                                            iconImageHref: '{{asset('img/icons/marker.svg')}}',
                                            iconImageSize: [42, 54],
                                        }));
                                    }
                                }
                            }

                            showYaMaps();
                        }
                    })
                </script>
            @endisset
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <ul class="contact-list">
                        @isset($contacts->work_time)
                            <li>
                                <span class="subtitle">{{__('contacts.work_time')}}</span>
                                <span class="contact-item"><span
                                            class="ico-clock"></span>{{$contacts->work_time}}</span>
                            </li>
                        @endisset
                        @isset($contacts->address)
                            <li>
                                <span class="subtitle">{{__('contacts.address')}}</span>
                                <span class="contact-item">
                            <span class="ico-adress">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </span>{{$contacts->address}}
                        </span>
                                @isset($contacts->link_map)
                                    <a href="{{$contacts->link_map}}"
                                       class="show-map_btn">{{__('contacts.link_map')}}</a>
                                @endisset
                            </li>
                        @endisset
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7 right-column">
                    <ul class="contact-list contact-list_right">
                        @isset($contacts->phone)
                            <li>
                                <span class="subtitle">{{__('contacts.phone')}}</span>
                                <span class="contact-item">
                            <span class="ico-phone"></span>
                            <a href="tel:+{{preg_replace('~\D~', '', $contacts->phone)}}">{{$contacts->phone}}</a>
                        </span>
                            </li>
                        @endisset
                        @isset($contacts->email)
                            <li>
                                <span class="subtitle">{{__('contacts.questions')}}</span>
                                <span class="contact-item">
                            <span class="ico-email"></span>
                            <a href="mailto:{{$contacts->email}}" class="contact-email">{{$contacts->email}}</a>
                        </span>
                            </li>
                        @endisset
                    </ul>
                    <div class="right-cell">
                        <a href="#callback-2" data-toggle="modal" class="main-mod_btn">{{__('contacts.get_call')}}</a>
                        @isset($socials)
                            <ul class="social-network contact_social-network">
                                @foreach($socials as $social)
                                    <li>
                                        <a href="{{$social->link ?? 'javascript:void(0)'}}" target="_blank">
                                            <img alt="alt" src="{{asset($social->icon)}}">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()