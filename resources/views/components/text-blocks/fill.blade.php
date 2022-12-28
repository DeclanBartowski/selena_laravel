<div class="energy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 unified_left-column">
                @isset($page->name)
                    <div class="section-title">{{$page->name}}</div>
                @endisset
                {!! $page->detail_content ?? '' !!}}
            </div>
            @isset($page->detail_picture)
                <div class="col-md-5 unified_right-column">
                    <div class="unified-img unified-img_fife">
                        <img alt="alt" src="{{asset($page->detail_picture)}}">
                    </div>
                </div>
            @endisset
        </div>
    </div>
</div>