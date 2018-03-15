<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dash';
    protected $username;

    public function __construct()
    {
        $this->middleware('guest:admin',['except' => 'logout']);
        $this->username = config('admin.global.username');
    }

    /**
     * 重写登陆视图页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.index');
    }

    public function guard()
    {
        return auth()->guard('admin');
    }
}
