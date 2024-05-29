@extends('admin.layouts.layout')

@push('pageTitle','Loại dự án')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.banners.store') : route('admin.banners.update', $needle) }}"
        method="post">
        @csrf

        @if(false === is_null($needle->id))
            @method('PUT')
        @endif

        <h4>{{ is_null($needle->id) ? 'Thêm mới' : 'Thay đổi' }}</h4>

        @include('admin.layouts.partials.alerts')

        <div class="row mt-3">
            <div class="col-sm-12 col-lg-6">
                <div class="mb-2" style="aspect-ratio: 16/9;">
                    <img id="holder"
                         src="{{ asset(old('img_url', $needle->img_url ?? 'theme/images/img-unavailable.jpg')) }}"
                         class="w-100" alt="Preview">
                    <div class="input-group">
                        <span class="input-group-btn"><a id="lfm" data-input="img_url" data-preview="holder"
                                                         class="btn btn-primary text-white"><i class="bi bi-images"></i> Chọn file</a></span>
                        <input id="img_url" class="form-control" type="text" name="img_url"
                               value="{{ old('img_url', $needle->img_url) != '' ? asset(old('img_url', $needle->img_url)) : '' }}"
                               placeholder="Hình đại diện">
                    </div>
                </div>
                <div class="text-muted text-center">(Tỉ lệ: 16/9, không quá 600 kB )</div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="mb-2">
                    <label for="head_text">Tiêu đề (không quá 40 kí tự)</label>
                    <input type="text" id="head_text" name="head_text"
                           value="{{ old('head_text', $needle->head_text) }}"
                           class="form-control" maxlength="40" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="highlight_text">Lời giới thiệu (không quá 170 kí tự)</label>
                    <textarea id="highlight_text"
                              name="highlight_text"
                              class="form-control"
                              rows="5"
                    >{{ old('highlight_text', $needle->highlight_text) }}</textarea>
                </div>

                <div class="mb-2">
                    <label for="button_url">Nút liên kết</label>
                    <input type="text" id="button_url" name="button_url"
                           value="{{ old('button_url', $needle->button_url) }}"
                           class="form-control"/>
                </div>

                <div class="mb-2">
                    <label for="name">Thứ tự hiển thị</label>
                    <input type="number" id="position" name="position"
                           value="{{ old('position', is_null($needle->id) ? $nextPosition : $needle->position) }}"
                           class="form-control"/>
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

@push('extraJs')
    <script>
        $('#lfm').filemanager("{{ route('unisharp.lfm.show') }}", "about");
    </script>
@endpush
