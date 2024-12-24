<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only( 'email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            // 'nama' => 'string|min:1',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|string|min:6',
            'password' => 'required|string|min:6',
        ]);

        // dah pusing error

        User::create([
            // 'nama' => $request->nama,
            'email' => $request->email,
            'password' =>  $request->password,
            // 'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }
}
