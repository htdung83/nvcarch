@extends('admin.layouts.layout')

@push('pageTitle','Loại dự án')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.post-categories.store') : route('admin.post-categories.update', $needle) }}"
        method="post">
        @csrf

        @if(false === is_null($needle->id))
            @method('PUT')
        @endif

        <div class="row mt-3">
            <div class="col-sm-12 col-lg-4 mx-auto">
                <h4>{{ is_null($needle->id) ? 'Thêm mới' : 'Thay đổi' }}</h4>

                @include('admin.layouts.partials.alerts')

                <div class="mb-2">
                    <label for="name">Tên gọi</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $needle->name) }}"
                           class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label>Trạng thái</label>
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
