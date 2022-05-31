<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('/admin');
        } else {
            $data = [
                'title' => 'Login Admin',
            ];

            return view('admin.login', $data);
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            // $request->session()->regenerate();
            return redirect('/admin');
        } else {
            return redirect('/admin/login')->with('status_error', 'Username atau Password Salah');
        }
    }

    public function actionLogout(Request $request)
    {
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
