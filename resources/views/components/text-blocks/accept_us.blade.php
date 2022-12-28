<div class="join-us_section"
     @isset($page->detail_picture)style="background: url('{{asset($page->detail_picture)}}') no-repeat center top; background-size: cover;"@endisset>
    <div class="container">
        <div class="join-us_content">
            @isset($page->name)
                <div class="section-title">{{$page->name}}</div>
            @endisset
            @isset($page->link, $page->preview_content)
                <a href="{{$page->link}}" data-toggle="modal" class="main-btn">{{$page->preview_content}}</a>
            @endisset
        </div>
    </div>
</div>