@isset($socials)
    <ul class="social-network {{$class ?? ''}}">
        @foreach($socials as $social)
            @isset($social->link, $social->icon)
                <li>
                    <a href="{{$social->link}}"><img data-src="{{asset($social->icon)}}" alt="alt"></a>
                </li>
            @endisset
        @endforeach
    </ul>
@endisset