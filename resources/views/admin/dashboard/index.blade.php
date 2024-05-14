@extends('admin.layouts.layout')

@push('pageTitle', 'Admin Dashboard')

@section('mainContent')
    <div class="container">
        <h4 class="mt-4">@stack('pageTitle')</h4>
    </div>
@endsection
