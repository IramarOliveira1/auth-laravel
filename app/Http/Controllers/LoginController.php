<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function verificationAuthentication()
    {
        if (Auth::check() === true) {
            return redirect()->intended('home');
        }
        return view('login');
    }

    public function index()
    {
        $users = User::all();
        return view('pages.home',compact('users'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
           return response()->json(['error' => false],200);
        }
        
        return response()->json(['messege' => 'Dados inexistentes!', 'error' => true],200);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

    public function store(Request $request)
    {  
        try {
            $criptografia =  Hash::make($request->password);

            $email = User::whereRaw('email = ?',[$request->email])->first();
    
            if (isset($email['email'])) {
                return response()->json(['messege' => 'Email Já existe na base de dados', 'error' => true],200);
            }
    
            $save = User::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $criptografia
                ]
            );

            return response()->json($save,200);
    
        } catch (\Exception  $e) {
            return response()->json(['messege' => 'Engraçadinho não fique removendo os requireds dos campos pelo console do navegador!', 'error' => true],200);
        }
      
    }
}
