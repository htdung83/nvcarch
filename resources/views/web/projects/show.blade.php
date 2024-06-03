@extends('web.layouts.home-page')

@push('pageTitle', $needle->name)

@section('mainContent')
    <section id="post">
        <div class="container py-5">
            <article>
                <h1 class="h3">{{ $needle->name }}</h1>

                {!! $needle->content !!}
            </article>
        </div>

        <div class="container pb-5">
            @if ($relatedProjects->count() >0)
                <h4 class="heading-decorated yellow-decorated">Các dự án khác</h4>

                <div class="row">
                    @foreach($relatedProjects as $project)
                        <div class="col-md-6 col-xl-4">
                            <!-- Post classic-->
                            <article class="post-classic post-minimal">
                                <img
                                    src="{{ asset($project->img_url == "" ? 'theme/images/img-unavailable.jpg' : $project->img_url) }}"
                                    alt="{{ $project->title }}"
                                    width="418"
                                    height="315"
                                    style="aspect-ratio: 418/315;"
                                />
                                <div class="post-classic-title">
                                    <h6><a href="{{ route('web.projects.show', $project->slug) }}"
                                           title="{{ $project->title }}">{{ $project->name }}</a></h6>
                                </div>
                                <div class="post-classic-body">
                                    <p>{{ $project->description }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
