@extends('admin.layouts.layout')

@push('pageTitle','Mật khẩu')

@section('mainContent')
    <form action="{{ route('admin.password.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-sm-12 col-lg-4 mx-auto">
                <h4>Đổi mật khẩu</h4>

                @include('admin.layouts.partials.alerts')

                <div class="mb-3">
                    <label for="password">Mật khẩu mới</label>
                    <input type="password" id="password" name="password" value=""
                           class="form-control" autofocus/>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation">Nhập lại mật khẩu mới</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value=""
                           class="form-control"/>
                </div>

                <button class="btn btn-success w-100">
                    <i class="bi bi-save2"></i> LƯU
                </button>
            </div>
        </div>
    </form>
@endsection
