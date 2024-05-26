@extends('admin.layouts.layout')

@push('pageTitle','Ban lãnh đạo')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.staff-members.store') : route('admin.staff-members.update', $needle) }}"
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
                    <label for="name">Tên gọi</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $needle->name) }}" class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="name">Học vị/ Vị trí</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $needle->title) }}" class="form-control"/>
                </div>

                <div class="mb-2">
                    <label for="description">Mô tả</label>
                    <textarea id="description"
                              name="description"
                              class="form-control"
                              rows="5"
                    >{{ old('description', $needle->description) }}</textarea>
                </div>

                <div class="mb-2">
                    <label for="name">Thứ tự hiển thị</label>
                    <input type="number" id="position" name="position" value="{{ old('position', $needle->position) }}" class="form-control"/>
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
                    <img id="holder" src="{{ asset(old('img_url', $needle->img_url ?? 'theme/images/img-unavailable.jpg')) }}" class="img-fluid" alt="Preview">
                    <div class="input-group">
                        <span class="input-group-btn"><a id="lfm" data-input="img_url" data-preview="holder" class="btn btn-primary text-white"><i class="bi bi-images"></i> Chọn file</a></span>
                        <input id="img_url" class="form-control" type="text" name="img_url" value="{{ old('img_url', $needle->img_url) != '' ? asset(old('img_url', $needle->img_url)) : '' }}" placeholder="Hình đại diện">
                    </div>
                </div>
                <div class="text-muted text-center">(Kích thước: 418 x 415 px)</div>
            </div>
        </div>
    </form>
@endsection

@push('extraJs')
    <script>
        $('#lfm').filemanager("{{ route('unisharp.lfm.show') }}", "about");
    </script>
@endpush
