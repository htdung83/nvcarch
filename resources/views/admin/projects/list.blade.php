@extends('admin.layouts.layout')

@push('pageTitle', 'Dự án')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="mb-3">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>

            @if ($list->total() > 0)
                {{ $list->links() }}
            @endif
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">MÃ</th>
                <th scope="col">TÊN DỰ ÁN</th>
                <th scope="col">PHÂN LOẠI</th>
                <th scope="col" class="text-nowrap text-center">HIỂN THỊ</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td class="text-nowrap">{{ $row->name }}</td>
                    <td>{{ $row->category->name }}</td>
                    <td class="text-center">
                        <span @class([
    'bi',
    'bi-check2-circle text-success' => $row->enabled,
    'bi-x-circle text-danger' => !$row->enabled,
])></span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.projects.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}Modal"
                               class="btn btn-sm btn-danger">Xóa</a>
                            <!-- Delete Modal -->
                            @include('admin.projects.modal-delete', ['item' => $row])
                            @endIsSuperAdmin
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
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
