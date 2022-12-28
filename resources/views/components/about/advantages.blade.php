@isset($advantages)
    <div class="section-title tablet-small_visible">{{__('about.you_find')}}</div>

    @foreach ($advantages as $mainKey => $group)
        <div class="row">
            @foreach ($group as $key => $advantage)
                @if ($key % 2 === 0)
                    <div class="col-md-7 order-md-2 right-column">
                        <div class="advantages-item {{$advantage['wrap_class']}}">
                            @isset ($advantage['preview'])
                                <div class="advantages-item_img">
                                    <img data-src="{{asset($advantage['preview'])}}" alt="alt">
                                </div>
                            @endisset
                            <div class="text-right">
                                <div class="advantages-item_desc {{$advantage['sub_wrap_class']}}">
                                    <span class="item-number">{{$advantage['item_number']}}</span>
                                    <p>
                                        {{$advantage['name'] ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @isset ($advantage['content'])
                            <div class="text-right">
                                <div class="section-title balance-title tablet-small_hidden">{!! $advantage['content'] !!}</div>
                            </div>
                        @endisset
                    </div>
                @else
                    <div class="col-md-5">
                        @if ($key == 1 && $mainKey == 0)
                            <div class="section-title text-left tablet-small_hidden">{{__('about.you_find')}}</div>
                        @endif
                        <div class="advantages-item">
                            @isset ($advantage['preview'])
                                <div class="advantages-item_img {{$advantage['wrap_class']}}">
                                    <img data-src="{{$advantage['preview']}}" alt="alt">
                                </div>
                            @endisset
                            <div class="advantages-item_desc {{$advantage['sub_wrap_class']}}">
                                <span class="item-number">{{$advantage['item_number']}}</span>
                                <p>
                                    {{$advantage['name'] ?? ''}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach
    <div class="section-title balance-title tablet-small_visible">{{__('about.balance')}}</div>
@endisset
