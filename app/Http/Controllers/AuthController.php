<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function masuk(Request $req)
    {
        $data = DB::table('users')
            ->where(function ($query) use ($req) {
                $query->where('username', '=', $req->username);
            })
            ->first(['id', 'role', 'pin']);

            if ($data !== null && $req->pin == $data->pin) {
                $req->session()->put('user_id', $data->id);
            $req->session()->put('role', $data->role);

            if ($data->role == 'staff') {
                return redirect('/list-product');
            } elseif ($data->role == 'admin') {
                return redirect('/users');
            } else {
                return redirect('/')->with('gagal', 'Akun Anda Tidak Terdaftar');
            }
        } else {
            return redirect('/')->with('gagal', 'Akun Anda Tidak Terdaftar');
        }
    }
}
