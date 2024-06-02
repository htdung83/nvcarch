@extends('admin.layouts.layout')

@push('pageTitle','Tài khoản')

@section('mainContent')
    <form
        action="{{ is_null($needle->id) ?  route('admin.users.store') : route('admin.users.update', $needle) }}"
        method="post">
        @csrf
        @if(false === is_null($needle->id))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col-sm-12 col-lg-4 mx-auto">
                <h4>{{ is_null($needle->id) ? 'Thêm mới' : 'Thay đổi' }}</h4>

                @include('admin.layouts.partials.alerts')

                <div class="mb-2">
                    <label for="name">Họ tên</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $needle->name) }}" class="form-control" autofocus/>
                </div>

                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $needle->email) }}" class="form-control"/>
                </div>

                <div class="mb-2">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" value="" class="form-control"/>
                </div>

                <div class="mb-2">
                    <label>Quyền truy cập</label>
                    <div class="p-2 rounded-3 border border-1">
                    @foreach($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="roles[]" id="role{{$role->id}}"
                                   value="{{ $role->id }}" @checked($needle->roles->contains($role->id))>
                            <label class="form-check-label" for="role{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class="mb-2">
                    <label>Trạng thái</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="enabled" id="enabled_0"
                                   value="0" @checked(intval(old('enabled', $needle->enabled)) === 0)>
                            <label class="form-check-label text-danger" for="enabled_0">Tạm ngừng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="enabled" id="enabled_1"
                                   value="1" @checked(intval(old('enabled', $needle->enabled)) === 1)>
                            <label class="form-check-label text-success" for="enabled_1">Đang hoạt động</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ $backToListUrl }}" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-arrow-bar-left"></i> THOÁT
                    </a>

                    <button class="btn btn-success px-5">
                        <i class="bi bi-save2"></i> LƯU
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
