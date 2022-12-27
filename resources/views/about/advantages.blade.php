@isset($advantages)
    <div class="section-title tablet-small_visible">Что вы найдете для себя</div>
    <div class="row">
        @isset($advantages[0])
            <div class="col-md-7 order-md-2 right-column">
                <div class="advantages-item">
                    @isset($advantages[0]['preview'])
                        <div class="advantages-item_img">
                            <img data-src="{{asset($advantages[0]['preview'])}}" alt="alt">
                        </div>
                    @endisset
                    <div class="advantages-item_desc desc-right desc-second">
                        <span class="item-number">01</span>
                        @isset($advantages[0]['name'])
                            <p>
                                {{$advantages[0]['name'] ?? ''}}
                            </p>
                        @endisset
                    </div>
                </div>
            </div>
        @endisset
        @isset($advantages[1])
            <div class="col-md-5">
                <div class="section-title text-left tablet-small_hidden">Что вы найдете для себя</div>
                <div class="advantages-item">
                    @isset($advantages[1]['preview'])
                        <div class="advantages-item_img">
                            <img data-src="{{asset($advantages[1]['preview'])}}" alt="alt">
                        </div>
                    @endisset
                    <div class="advantages-item_desc">
                        <span class="item-number">02</span>
                        @isset($advantages[1]['name'])
                            <p>
                                {{$advantages[1]['name'] ?? ''}}
                            </p>
                        @endisset
                    </div>
                </div>
            </div>
        @endisset
    </div>
    <div class="row">
        @isset($advantages[2])
            <div class="col-md-7 order-md-2 right-column">
                <div class="advantages-item item-third">
                    @isset($advantages[2]['preview'])
                        <div class="advantages-item_img">
                            <img data-src="{{asset($advantages[2]['preview'])}}" alt="alt">
                        </div>
                    @endisset
                    <div class="text-right">
                        <div class="advantages-item_desc desc-three">
                            <span class="item-number">03</span>
                            @isset($advantages[2]['name'])
                                <p>
                                    {{$advantages[2]['name'] ?? ''}}
                                </p>
                            @endisset
                        </div>
                    </div>
                </div>
                @isset($advantages[2]['content'])
                    <div class="text-right">
                        <div class="section-title balance-title tablet-small_hidden">
                            {!! $advantages[2]['content'] ?? '' !!}
                        </div>
                    </div>
                @endisset
            </div>
        @endisset
        @isset($advantages[3])
            <div class="col-md-5">
                <div class="advantages-item">
                    @isset($advantages[3]['preview'])
                        <div class="advantages-item_img text-right">
                            <img data-src="{{asset($advantages[3]['preview'])}}" alt="alt">
                        </div>
                    @endisset
                    <div class="advantages-item_desc desc-right">
                        <span class="item-number">04</span>
                        @isset($advantages[3]['name'])
                            <p>
                                {{$advantages[3]['name'] ?? ''}}
                            </p>
                        @endisset
                    </div>
                </div>
            </div>
        @endisset
    </div>
    <div class="section-title balance-title tablet-small_visible">Легкость и баланс</div>
@endisset
