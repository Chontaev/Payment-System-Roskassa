<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenController extends Controller
{
    public function login(){
        $this->middleware('guest');
        if(Auth::check() && Auth::user()->role_id==2) return redirect()->route('products.index');
        else if(Auth::check() && Auth::user()->role_id == 0) return redirect()->route('main');
        else return view('auth.login');
    }
    public function register(){
        $this->middleware('guest');
        if(Auth::check() && Auth::user()->role_id==2) return redirect()->route('products.index');
        else if(Auth::check() && Auth::user()->role_id == 0) return redirect()->route('main');
        else return view('auth.register');
    }
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if(Auth::user()->role_id==0)
                return redirect()->intended('main');
                if(Auth::user()->role_id==2)
                return redirect()->intended('products');
        }

        return back()->withErrors([
            'email' => 'Неверный пароль или логин',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>['required','min:3','string','unique:users,email'],
            'password' => ['required','min:8',],
            'password_confirm' => ['required', 'same:password'],
        ]);
        User::create(['email' => $request->email, 'password' => Hash::make($request->password),'role_id' => $request->role_id]);
        return redirect()->route('login')->with('success','Вы успешно прошли регистрацию');
    }
}
