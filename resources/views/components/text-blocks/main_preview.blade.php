<div class="main-section" @isset($page->preview_picture)style="background-image:url('{{$page->preview_picture}}')"@endisset>
    @isset($page->video_link)
        <video class="video" preload="yes" muted="muted" autoplay playsinline loop>
            <source src="{{$page->video_link}}" class="source"
                    type="video/mp4">
        </video>
    @endisset
    <div class="container">
        {!! $page->detail_content ?? '' !!}
        @isset($page->preview_content, $page->link)
            <a href="{{$page->link ?? 'javascript:void(0)'}}" data-toggle="modal"
               class="main-btn">{{$page->preview_content ?? ''}}</a>
        @endisset
    </div>
</div>