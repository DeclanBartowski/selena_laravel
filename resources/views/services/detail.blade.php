@extends('layouts.main')
@section('content')
    <div class="services-detailed_section">
        <div class="container">
            @include('layouts.breadcrumbs')
            <div class="services-detailed_header">
                @isset($service->name)
                <h1 class="line-title">{{$service->name}}</h1>
                @endisset
                {!! $service->preview_content !!}
            </div>
        </div>
        @isset($service->detail_picture)
        <div class="service-banner" style="background-image:url('{{$service->detail_picture}}')"></div>
        @endisset
        <div class="container">
            @isset($servicePrices)
            <div class="service-price_content">
                @foreach($servicePrices as $priceItem)
                    <div class="service-price_item">
                    <div class="left-column">
                        <div class="item-header">
                            @isset($priceItem->name)
                            <span class="item-title">{{$priceItem->name}}</span>
                            @endisset
                            @isset($priceItem->price)
                                <span class="item-price">{{$priceItem->price}} <span class="rouble">i</span></span>
                            @endisset
                        </div>
                        @isset($priceItem->description)
                        <p>{{$priceItem->description}}</p>
                        @endisset
                    </div>
                    <div class="right-column">
                        <a href="javascript:void(0)" class="main-mod_btn item-btn">Оплатить</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endisset
            {!! $service->detail_content !!}
        </div>
    </div>
@endsection