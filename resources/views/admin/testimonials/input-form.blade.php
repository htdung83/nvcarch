@extends('admin.layouts.layout')

@push('pageTitle','Ý kiến khách hàng')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.testimonials.store') : route('admin.testimonials.update', $needle) }}"
        method="post">
        @csrf

        @if(false === is_null($needle->id))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-sm-12 col-lg-8 mx-auto">
                <h4>{{ is_null($needle->id) ? 'Thêm mới' : 'Thay đổi' }}</h4>

                @include('admin.layouts.partials.alerts')
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-lg-4 ms-auto">
                <div class="mb-2">
                    <label for="name">Tên khách hàng</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $needle->name) }}"
                           class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="construction">Công trình</label>
                    <input type="text" id="construction" name="construction" value="{{ old('construction', $needle->construction) }}"
                           class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="comment">Đánh giá</label>
                    <textarea id="comment"
                              name="comment"
                              class="form-control"
                              rows="5"
                    >{{ old('description', $needle->description) }}</textarea>
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
            <div class="col-sm-12 col-lg-4 me-auto">
                <div class="mb-2">
                    <img id="holder" src="{{ asset(old('img_url', $needle->img_url ?? 'theme/images/img-unavailable.jpg')) }}" class="img-fluid" alt="Preview" style="max-width: 120px;">
                    <div class="input-group">
                        <span class="input-group-btn"><a id="lfm" data-input="img_url" data-preview="holder" class="btn btn-primary text-white"><i class="bi bi-images"></i> Chọn file</a></span>
                        <input id="img_url" class="form-control" type="text" name="img_url" value="{{ old('img_url', $needle->img_url) != '' ? asset(old('img_url', $needle->img_url)) : '' }}" placeholder="Hình đại diện">
                    </div>
                </div>
                <div class="text-muted text-center">(Kích thước: 120 x 120 px)</div>
            </div>
        </div>
    </form>
@endsection

@push('extraJs')
    <script>
        $('#lfm').filemanager("{{ route('unisharp.lfm.show') }}", "about");
    </script>
@endpush
