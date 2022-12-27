<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @isset($page->name)
                    <h2>{{$page->name}}</h2>
                @endisset
                @isset($page->detail_content)
                    {!! $page->detail_content ?? '' !!}
                    @isset($page->link)
                        <a href="{{$page->link}}" class="main-btn">Читать все <span class="ico-arrow"></span></a>
                    @endisset
                @endisset
            </div>
            @isset($page->detail_picture)
                <div class="col-md-5 right-column">
                    <div class="unified-img">
                        <img data-src="{{asset($page->detail_picture)}}" alt="alt">
                    </div>
                </div>
            @endisset
        </div>
    </div>
</div>