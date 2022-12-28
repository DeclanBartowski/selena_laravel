@isset($advantages)
    <div class="advantages-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-md-2">
                    <div class="section-title">{{__('about.you_find')}}</div>
                    <ol class="advantages-list">
                        @foreach($advantages as $group)
                            @foreach($group as $advantage)
                                @isset($advantage['name'])
                                    <li>{{$advantage['name']}}</li>
                                @endisset
                            @endforeach
                        @endforeach
                    </ol>
                </div>
                <div class="col-md-7 left-column">
                    <div class="unified-img unified-mod_img">
                        <img data-src="{{asset('static/02.jpg')}}" alt="alt">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endisset