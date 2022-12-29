<div class="my-office_section">
    <div class="container">
        @isset($data->name)
            <div class="section-title">{{$data->name}}</div>
        @endisset
        <div class="row align-items-center">
            @isset($data->preview)
                <div class="col-md-6 left-column">
                    {!! $data->preview !!}
                </div>
            @endisset
            <div class="col-md-6">
                <ul class="my-office_list my-office_list-mod">
                    @isset($data->children_area_value)
                        <li>
                            <div class="my-office_item">
                                <span class="item-number">{{$data->children_area_value}}</span>
                                {!! $data->children_area_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                    @isset($data->session_value)
                        <li>
                            <div class="my-office_item">
                                <span class="item-number">{{$data->session_value}}</span>
                                {!! $data->session_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                    @isset($data->cabinet_value)
                        <li class="last-item">
                            <div class="my-office_item">
                                <span class="item-number">{{$data->cabinet_value}}</span>
                                {!! $data->cabinet_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                </ul>
            </div>
        </div>
    </div>
    @isset($data->photo)
        <div class="my-office_slider-mod">
            @foreach($data->photo as $photo)
                <div class="slide-item">
                    <a href="{{asset($photo)}}" class="fancybox" data-fancybox="gallery">
                        <img data-src="{{asset($photo)}}" alt="alt">
                        <span class="loop-icon ico-plus"></span>
                    </a>
                </div>
            @endforeach
        </div>
    @endisset
</div>