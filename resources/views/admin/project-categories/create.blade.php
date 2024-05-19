@extends('admin.layouts.layout')

@push('pageTitle','Dịch vụ')

@section('mainContent')
    <form action="{{ route('admin.services.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-sm-12 col-lg-4 mx-auto">
                <h4>Thêm mới</h4>

                <div class="mb-2">
                    <label for="name">Biểu tượng</label>
                    <input type="text" id="icon" name="icon" value="{{ old('icon') }}" class="form-control"/>
                </div>

                <div class="mb-2">
                    <label for="name">Tên gọi</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="description">Mô tả</label>
                    <textarea id="description"
                              name="description"
                              class="form-control"
                              rows="5"
                    >{{ old('description') }}</textarea>
                </div>

                <div class="mb-2">
                    <label for="name">Thứ tự hiển thị</label>
                    <input type="number" id="position" name="position" value="{{ old('position', $nextPosition) }}" class="form-control"/>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ \Illuminate\Support\Facades\URL::previous() }}" class="btn btn-outline-secondary px-4">
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
