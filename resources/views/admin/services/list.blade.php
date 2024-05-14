@extends('admin.layouts.layout')

@push('pageTitle', 'Dịch vụ')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        <div class="mb-3">
            <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">BIỂU TƯỢNG</th>
                <th scope="col">TÊN GỌI</th>
                <th scope="col">MÔ TẢ</th>
                <th scope="col">NGÀY TẠO</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->icon }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->created_at->format('d/m/Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        <div class="alert alert-warning text-center mb-0">
                            <i class="bi bi-exclamation-triangle"></i> Không tìm thấy mẫu tin nào.
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
