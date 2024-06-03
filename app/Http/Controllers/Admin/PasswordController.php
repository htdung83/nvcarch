<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePasswordRequest;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function create()
    {
        return view('admin.profile.password');
    }

    public function store(StorePasswordRequest $request)
    {
        $user = auth()->user();

        $validated = $request->validated();

        $user->update(['password' => bcrypt($validated['password'])]);

        return redirect()->back()->withSuccess('Đổi mật khẩu thành công!');
    }
}
