@extends('web.layouts.home-page')

@push('pageTitle', 'Trang chủ')

@section('mainContent')
    <section id="post">
        <div class="container py-5">
            <article>
                <h1 class="h3">{{ $needle->title }}</h1>

                {!! $needle->content !!}
            </article>
        </div>

        <div class="container pb-5">
            @if ($previousPosts->count() >0)
                <h4 class="heading-decorated yellow-decorated">Các tin khác</h4>

                <div class="row">
                    @foreach($previousPosts as $post)
                        <div class="col-md-6 col-xl-4">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal">
                                <img
                                    src="{{ asset($post->img_url == "" ? 'theme/images/img-unavailable.jpg' : $post->img_url) }}"
                                    alt="{{ $post->title }}"
                                    width="418"
                                    height="315"
                                    style="aspect-ratio: 418/315;"
                                />
                                <div class="post-classic-title">
                                    <h6><a href="{{ route('web.post.show', $post->slug) }}"
                                           title="{{ $post->title }}">{{ $post->title }}</a></h6>
                                </div>
                                <div class="post-meta">
                                    <div class="group">
                                        <a href="{{ route('web.post.show', $post->slug) }}"
                                           title="{{ $post->created_at->format('d/m/Y') }}">
                                            <time datetime="2021">{{ $post->created_at->format('d/m/Y') }}</time>
                                        </a>
                                    </div>
                                </div>
                                <div class="post-classic-body">
                                    <p>{{ $post->description }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
