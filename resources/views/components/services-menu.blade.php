@isset($services)
    <div class="col-md-5 col-sm-12">
        <div class="footer-title">
            <a href="{{route('services.index')}}">{{__('layout-main.services')}}</a>
        </div>
        <ul class="footer-menu">
            @foreach($services as $service)
                @isset($service->code, $service->name)
                    <li><a href="{{route('services.show', $service->code)}}">{{$service->name}}</a></li>
                @endisset
            @endforeach
        </ul>
    </div>
@endisset