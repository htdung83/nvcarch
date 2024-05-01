@extends('web.layouts.home-page')

@push('pageTitle', 'Không có quyền truy cập')

@section('mainContent')
    <!-- contacts-->
    <section class="novi-background bg-cover section-md bg-default" id="contacts">
        <div class="container text-center">
            <div>
                <img src="{{ asset('theme/images/404.png') }}" alt="Forbidden content">
            </div>
            <h4 class="mt-4">Nội dung này không tồn tại.</h4>
            <div class="py-4">
                <a href="{{ url('/') }}" title="Trang chủ" class="btn btn-primary">Quay lại trang chủ</a>
                <a href="{{ url()->previous() }}" title="Trang chủ" class="btn btn-primary">Quay lại trang trước</a>
            </div>
        </div>
    </section>
@endsection
