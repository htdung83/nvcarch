@extends('admin.layouts.layout')

@push('pageTitle', 'Dự án')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="d-flex align-items-center gap-3 mb-3">
            <form action="{{ request()->url() }}" method="GET" class="d-flex align-items-center px-2 py-1 border border-3 rounded-3 w-100 w-lg-25">
                <span class="bi bi-search"></span>
                <input type="text" name="keywords" value="{{ old('keywords') }}" placeholder="Nhập từ khóa ..." class="form-control border-0 shadow-none" autofocus>
            </form>

            <a href="{{ route('admin.posts.create') }}" class="btn btn-success rounded-pill text-nowrap">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">MÃ</th>
                <th scope="col">HÌNH ẢNH</th>
                <th scope="col">TIÊU ĐỀ</th>
                <th scope="col">CHỦ ĐỀ</th>
                <th scope="col" class="text-nowrap text-center">HIỂN THỊ</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td class="text-center">
                        <img alt="{{ $row->title }}" src="{{ asset($row->img_url != "" ? $row->img_url : '/theme/images/img-unavailable.jpg') }}" style="max-width: 150px;">
                    </td>
                    <td class="text-nowrap">{{ $row->title }}</td>
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
                            <a href="{{ route('admin.posts.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}Modal"
                               class="btn btn-sm btn-danger">Xóa</a>
                            <!-- Delete Modal -->
                            @include('admin.posts.modal-delete', ['item' => $row])
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

        <div class="pb-3">
            @if ($list->total() > 0)
                {{ $list->links() }}
            @endif
        </div>
    </div>
@endsection
