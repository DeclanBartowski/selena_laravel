@isset($services)
    <div class="services-section">
        <div class="container">
            <div class="services-section_header">
                <div class="section-title">{{__('index.into_world')}}</div>
                <a href="/services" class="main-btn mobile-hidden">{{__('index.all_services')}} <span class="ico-arrow"></span></a>
            </div>
        </div>
        <div class="services-slider">
            @foreach($services as $service)
                <div class="service-item">
                    @isset($service->main_picture)
                        <img data-src="{{asset($service->main_picture)}}" alt="alt">
                    @endisset
                    <div class="service-item_desc">
                        <a href="/services/{{$service->code}}">
                            @isset($service->name)
                                <span class="service-item_title">{{$service->name}}</span>
                            @endisset
                            @isset($service->main_content)
                                <p>{{$service->main_content}}</p>
                            @endisset
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mobile-visible container">
            <a href="/services" class="main-btn unified_mobile-btn">{{__('index.all_services')}} <span class="ico-arrow"></span></a>
        </div>
    </div>
@endisset