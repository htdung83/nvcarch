@extends('admin.layouts.layout')

@push('pageTitle', 'Loại dự án')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="mb-3">
            <a href="{{ route('admin.banners.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">BANNER</th>
                <th scope="col">TIÊU ĐỀ</th>
                <th scope="col" class="text-nowrap">LỜI GIỚI THIỆU</th>
                <th scope="col" class="text-nowrap">NÚT LIÊN KẾT</th>
                <th scope="col" class="text-nowrap">HIỂN THỊ</th>
                <th scope="col" class="text-nowrap">THỨ TỰ</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td class="text-center">
                        <img src="{{ asset($row->img_url ? : 'theme/images/img-unavailable.jpg') }}" alt="{{ $row->name }}" class="img-fluid" style="width: 150px;">
                    </td>
                    <td class="text-nowrap">{{ $row->head_text }}</td>
                    <td>{{ $row->highlight_text }}</td>
                    <td class="text-center">{{ $row->button_url }}</td>
                    <td class="text-center">
                        <span @class([
    'bi',
    'bi-check2-circle text-success' => $row->enabled,
    'bi-x-circle text-danger' => !$row->enabled,
])></span>
                    </td>
                    <td class="text-center">{{ $row->position }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.banners.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}Modal"
                               class="btn btn-sm btn-danger">Xóa</a>
                            <!-- Delete Modal -->
                            @include('admin.banners.modal-delete', ['item' => $row])
                            @endIsSuperAdmin
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
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
