<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
        @foreach($items as $item)
            @isset($item['url'])
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $item['name'] }}</li>
            @endisset
        @endforeach
    </ol>
</nav>
