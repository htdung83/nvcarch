@extends('admin.layouts.layout')

@push('pageTitle', 'Tài khoản')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="mb-3">
            <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">HỌ TÊN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">QUYỀN TRUY CẬP</th>
                <th scope="col" class="text-center">TRẠNG THÁI</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td class="text-nowrap">{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                        @foreach($row->roles as $role)
                            <span @class(['badge rounded-pill','bg-secondary' => $role->id === 'editor', 'bg-primary' => in_array($role->id, ['super-admin', 'admin'])])>{{ $role->name }}</span>
                        @endforeach
                    </td>
                    <td class="text-center">
                        <span @class([
    'badge rounded-pill',
    'bg-success' => $row->enabled,
    'bg-danger' => !$row->enabled,
])>{{ $row->enabled === 1 ? 'Hoạt động' : 'Tạm ngừng' }}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.users.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" class="btn btn-sm btn-danger"
                               data-bs-target="#delete{{ $row->id }}Modal"
                               data-bs-toggle="modal"
                            >Xóa</a>
                            <!-- Delete Modal -->
                            @include('admin.users.modal-delete', ['item' => $row])
                            @endIsSuperAdmin
                        </div>
                    </td>
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
