@extends('admin.layouts.layout')

@push('pageTitle','Giới thiệu công ty')

@section('mainContent')
    <form action="{{ route('admin.about-us.update', $needle) }}" method="post">
        @csrf
        @method('PUT')

        <h4>Thay đổi nội dung</h4>

        @include('admin.layouts.partials.alerts')

        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="mb-2">
                    <label for="title">Tiêu đề</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $needle->title) }}"
                           class="form-control"/>
                </div>

                <div class="mb-2">
                    <label for="headline">Headline</label>
                    <input type="text" id="headline" name="headline" value="{{ old('headline', $needle->headline) }}"
                           class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="content">Mô tả ngắn</label>
                    <textarea id="content"
                              name="content"
                              class="form-control"
                              rows="5"
                    >{{ old('content', $needle->content) }}</textarea>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-success px-5">
                        <i class="bi bi-save2"></i> LƯU
                    </button>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
{{--                <div class="mb-2">--}}
{{--                    <label for="img_url">Hình ảnh</label>--}}
{{--                    <input type="text" id="img_url" name="img_url" value="{{ old('img_url', $needle->img_url) }}"--}}
{{--                           class="form-control"/>--}}
{{--                </div>--}}

                <div class="mb-2">
                    <img id="holder" src="{{ asset(old('img_url', $needle->img_url ?? 'theme/images/img-unavailable.jpg')) }}" class="img-fluid" alt="Preview">
                    <div class="input-group">
                        <span class="input-group-btn"><a id="lfm" data-input="img_url" data-preview="holder" class="btn btn-primary text-white"><i class="bi bi-images"></i> Chọn file</a></span>
                        <input id="img_url" class="form-control" type="text" name="img_url" value="{{ asset(old('img_url', $needle->img_url ?? 'theme/images/img-unavailable.jpg')) }}" placeholder="Chọn đường dẫn hình">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('extraJs')

    <script>
        $('#lfm').filemanager("{{ route('unisharp.lfm.show') }}", "about");
    </script>
@endpush
