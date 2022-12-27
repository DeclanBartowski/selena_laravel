<div class="my-office_section">
    <div class="row no-gutters align-items-center">
        <div class="col-md-5 left-column">
            <div class="my-office_desc">
                @isset($data->name)
                    <div class="section-title">{{$data->name ?? ''}}</div>
                @endisset
                {!! $data->preview ?? '' !!}
                <ul class="my-office_list">
                    @isset($data->children_area_value)
                        <li>
                            <div class="my-office_item">
                                <span class="item-number">{{$data->children_area_value ?? ''}}</span>
                                {!! $data->children_area_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                    @isset($data->session_value)
                        <li>
                            <div class="my-office_item">
                                <span class="item-number">{{$data->session_value ?? ''}}</span>
                                {!! $data->session_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                    @isset($data->cabinet_value)
                        <li>
                            <div class="my-office_item">
                                <span class="item-number">{{$data->cabinet_value ?? ''}}</span>
                                {!! $data->cabinet_description ?? '' !!}
                            </div>
                        </li>
                    @endisset
                </ul>
            </div>
        </div>
        @isset($data->photo)
            <div class="col-md-7">
                <div class="my-office_slider">
                    @foreach($data->photo as $photo)
                        <div class="slide-item">
                            <a href="{{asset($photo)}}" class="fancybox" data-fancybox="gallery">
                                <img data-src="{{asset($photo)}}" alt="alt">
                                <span class="loop-icon ico-plus"></span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endisset
    </div>
</div>