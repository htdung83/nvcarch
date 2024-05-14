@extends('admin.layouts.layout')

@push('pageTitle','Dịch vụ')

@section('mainContent')
    <h4>Thêm mới</h4>

    <form action="{{ route('admin.services.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <label for="name">Tên gọi</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" />
            </div>
            <div class="col-lg-6">
                <label for="description">Mô tả</label>
                <input type="text" id="description" name="description" value="{{ old('description') }}" class="form-control" />
            </div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <a href="{{ \Illuminate\Support\Facades\URL::previous() }}" class="btn btn-outline-secondary px-4">
                <i class="bi bi-arrow-bar-left"></i> THOÁT
            </a>

            <button class="btn btn-success px-5">
                <i class="bi bi-save2"></i> LƯU
            </button>
        </div>
    </form>
@endsection
