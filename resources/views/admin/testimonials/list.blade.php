@extends('admin.layouts.layout')

@push('pageTitle', 'Ý kiến khách hàng')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="mb-3">
            <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">TÊN GỌI</th>
                <th scope="col" class="text-nowrap">HÌNH ĐẠI DIỆN</th>
                <th scope="col" class="text-nowrap">NỘI DUNG</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td class="text-nowrap">{{ $row->name }}</td>
                    <td class="text-center">
                        <img src="{{ asset($row->img_url ? : 'theme/images/img-unavailable.jpg') }}" alt="{{ $row->name }}" class="img-fluid" style="width: 120px;">
                    </td>
                    <td>{{ $row->comment }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.testimonials.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}Modal"
                               class="btn btn-sm btn-danger">Xóa</a>
                            <!-- Delete Modal -->
                            @include('admin.testimonials.modal-delete', ['item' => $row])
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
