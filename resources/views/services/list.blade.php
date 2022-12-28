@extends('layouts.main')
@section('content')
    <div class="services-other_section">
        <div class="container">
            @include('layouts.breadcrumbs')

            <x-text-block-layout code="services"/>

            <div class="row services-other_row">
                @foreach($services as $service)
                    @isset($service->code)
                        <div class="col-sm-6">
                            <div class="service-mod_item">
                                @isset($service->preview_picture)
                                    <div class="item-img">
                                        <a href="{{route('services.show', $service->code)}}" class="item-link">
                                            <img data-src="{{$service->preview_picture}}" alt="alt">
                                        </a>
                                    </div>
                                @endisset
                                <span class="item-title">
                                    <a href="{{route('services.show', $service->code)}}">{{$service->name}}</a>
                                </span>
                                <p>{{$service->main_content}}</p>
                                <a href="{{route('services.show', $service->code)}}" class="main-btn item-btn">
                                    {{__('services.more')}} <span class="ico-arrow"></span>
                                </a>
                            </div>
                        </div>
                    @endisset
                @endforeach
            </div>
        </div>
    </div>
@endsection