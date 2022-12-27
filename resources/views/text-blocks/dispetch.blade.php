<div class="guide-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                @isset($page->name)
                    <div class="section-title">Ваш проводник</div>
                @endisset
                {!! $page->detail_content ?? '' !!}
            </div>
            @isset($page->detail_picture)
                <div class="col-md-6 right-mod_column text-center">
                    <div class="unified-img unified-img_fourth">
                        <img alt="alt" src="{{asset($page->detail_picture)}}">
                    </div>
                </div>
            @endisset
        </div>
    </div>
</div>