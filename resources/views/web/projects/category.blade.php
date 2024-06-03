@extends('web.layouts.home-page')

@push('pageTitle', 'Trang chủ')

@section('mainContent')
    <section id="projectCategory" class="py-5">
        <div class="container">
            @include('web.layouts.partials.breadcrumbs', ['items' => $breadcrumbs])

            <h1 class="h3">{{ $needle->name }}</h1>

            <div class="row">
                @forelse($projectList as $project)
                    <div class="col-md-6 col-xl-4">
                        <article class="post-classic post-minimal">
                            <a href="{{ route('web.projects.show', $project->slug) }}" title="{{ $project->name }}">
                                <img
                                    src="{{ asset($project->img_url == "" ? 'theme/images/img-unavailable.jpg' : $project->img_url) }}"
                                    alt="{{ $project->name }}"
                                    width="418"
                                    height="315"
                                    style="aspect-ratio: 418/315;"
                                />
                            </a>
                            <div class="post-classic-title">
                                <h6>
                                    <a href="{{ route('web.projects.show', $project->slug) }}"
                                       title="{{ $project->name }}">
                                        {{ $project->name }}
                                    </a>
                                </h6>
                            </div>
                            <div class="post-classic-body">
                                <p>{{ $project->description }}</p>
                            </div>
                        </article>
                    </div>
                @empty
                    <div class="col-sm-12">
                        <div class="alert alert-warning">
                            <i class="bi bi-info-circle"></i> Không tìm thấy dự án nào.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
