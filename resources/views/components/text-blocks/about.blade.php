<div class="banner-section" @isset($page->preview_picture)style="background-image:url('{{$page->preview_picture}}')"@endisset>
    @isset($page->video_link)
        <video class="video video-mod video-about" preload="yes" muted="muted" autoplay playsinline loop>
            <source src="{{$page->video_link}}" class="source" type="video/mp4">
        </video>
    @endisset
    <div class="container">
        @include('layouts.breadcrumbs')
        @isset($page->name)
            <h1 class="line-title">{{$page->name}}</h1>
        @endisset
        {!! $page->detail_content ?? '' !!}
        @isset($page->link, $page->preview_content)
            <a href="{{$page->link}}" data-toggle="modal" class="main-btn">{{$page->preview_content}}</a>
        @endisset
    </div>
</div>