@extends('admin.layouts.layout')

@push('pageTitle', 'Dịch vụ')

@section('mainContent')
    <h4>Danh sách</h4>

    <div class="table-responsive">
        @IsSuperAdmin
        <div class="mb-3">
            <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>
        @endIsSuperAdmin

        @include('admin.layouts.partials.alerts')

        <table class="table align-middle border">
            <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col" class="text-nowrap">BIỂU TƯỢNG</th>
                <th scope="col">TÊN GỌI</th>
                <th scope="col">MÔ TẢ</th>
                <th scope="col" class="text-nowrap">THỨ TỰ</th>
                <th scope="col"><i class="bi bi-list"></i></th>
            </tr>
            </thead>
            <tbody>
            @forelse($list as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>
                        <div class="blurb-circle__icon">
                            <span class="icon novi-icon novi-background {{ $row->icon }}"></span>
                        </div>
                    </td>
                    <td class="text-nowrap">{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td class="text-center">{{ $row->position }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('admin.services.edit', $row) }}" class="btn btn-sm btn-warning">Sửa</a>
                            @IsSuperAdmin
                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}Modal"
                               class="btn btn-sm btn-danger">Xóa</a>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$row->id}}Modal" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa mẫu tin</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bạn muốn xóa dịch vụ <span class="fw-bold text-primary">`{{ $row->name }}`?</span>
                                            </p>
                                        </div>
                                        <form action="{{ route('admin.services.destroy', $row) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-footer justify-content-between">
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Đóng
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
