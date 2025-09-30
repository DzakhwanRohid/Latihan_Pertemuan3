<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function index()
    {
        return view('login-form');
    }
    public function login(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'username' => 'required', // Username wajib diisi
            'password' => [
                'required',
                 'min:3',
                'regex:/[A-Z]/'
            ]
        ]);
        $nim = 'Nim2455301050';
        if ($request->username == $nim && $request->password == $nim) {
            return back()->with('success', 'Login Berhasil!');
        }
        return back()->with('error', 'Username atau Password salah!');
    }
}
