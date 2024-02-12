<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $User;
    public function __construct(User $User)
    {
        $this->User = $User;
    }
    public function login()
    {
        $title = 'Masuk';
        return view('auth.login', compact('title'));
    }
    public function PostLogin(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Text wajib menggunakan format email',
            'password.required' => 'Password wajib di isi'
        ]);
        if (!$validasi) {
            return redirect()->back()->withErrors($validasi);
        } else {
            $data = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (Auth::attempt($data)) {
                return redirect('dashboard');
            } else {
                return redirect()->back()->with('gagal', 'Email atau Password salah');
            }

        }

    }
    public function register()
    {
        $title = 'Daftar';
        return view('auth.register', compact('title'));
    }
    public function PostRegister(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ], [
            'nama.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'email.email' => 'Text wajib menggunakan format email',
            'email.unique' => 'Email sudah di gunakan',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok'
        ]);
        if (!$validasi) {
            return redirect()->back()->withErrors($validasi);
        } else {
            $this->User->CreateUser([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return redirect('login')->with('create', 'User berhasil di buat');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
