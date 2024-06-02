@extends('admin.layouts.layout')

@push('pageTitle','Dự án')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.projects.store') : route('admin.projects.update', $needle) }}"
        method="post">
        @csrf
        @if(false === is_null($needle->id))
            @method('PUT')
        @endif

        @include('admin.layouts.partials.alerts')

        <h4>{{ is_null($needle->id) ? 'Thêm mới' : 'Thay đổi' }}</h4>

        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="mb-3">
                    <label for="name">Tên gọi</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $needle->name) }}"
                           class="form-control" autofocus/>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="mb-3">
                    <label for="category">Phân loại</label>
                    <select id="category" name="category" class="form-control">
                        <option value="">- chọn -</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category', $needle->project_category_id) == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="mb-3">
                    <label for="description">Mô tả (độ dài tối ưu 170 từ)</label>
                    <textarea id="description"
                              name="description"
                              class="form-control"
                              rows="2"
                    >{{ old('description', $needle->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Trạng thái hiển thị</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="enabled" id="enabled_0"
                               value="0" @checked(intval(old('enabled', $needle->enabled)) === 0)>
                        <label class="form-check-label" for="enabled_0">Ẩn</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="enabled" id="enabled_1"
                               value="1" @checked(intval(old('enabled', $needle->enabled)) === 1)>
                        <label class="form-check-label" for="enabled_1">Hiển thị</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content">Mô tả chi tiết dự án</label>
                    <textarea id="content" name="content" class="form-control">{{ old('content', $needle->content) }}</textarea>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ $backToListUrl }}" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-arrow-bar-left"></i> THOÁT
                    </a>

                    <button class="btn btn-success px-5">
                        <i class="bi bi-save2"></i> LƯU
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('extraCss')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push('extraJs')
    <script src="{{ asset('ckeditor-4.17/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        let options = {
            customConfig: '{{ asset('ckeditor-4.17/ckeditor-config.js') }}',
            filebrowserImageBrowseUrl: '{{ route('unisharp.lfm.show', ['type'=>'project']) }}',
            filebrowserImageUploadUrl: '{{ route('unisharp.lfm.upload', ['type'=>'project']) }}',
            filebrowserBrowseUrl: '{{ route('unisharp.lfm.show', ['type'=>'project']) }}',
            filebrowserUploadUrl: '{{ route('unisharp.lfm.upload', ['type'=>'project']) }}',
        }

        CKEDITOR.replace('content', options);
    </script>
@endpush
