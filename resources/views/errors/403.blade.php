@extends('web.layouts.home-page')

@push('pageTitle', 'Không có quyền truy cập')

@section('mainContent')
    <!-- contacts-->
    <section class="novi-background bg-cover section-md bg-default" id="contacts">
        <div class="container text-center">
            <div>
                <img src="{{ asset('theme/images/403.png') }}" alt="Forbidden content">
            </div>
            <h4 class="mt-4">Bạn không có quyền truy cập nội dung này.</h4>
            <div class="py-4">
                <a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a>
                <a href="{{ url()->previous() }}" title="Trang chủ">Trang trước</a>
            </div>
        </div>
    </section>
@endsection
