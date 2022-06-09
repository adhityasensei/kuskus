<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials=$request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login berhasil');
        }
        
        return back()->withErrors(['email' => 'the provided credentials do not match our records.',])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function daftaruser(Request $request){
        $user = new User;
        $request->validate([
            'Name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Role'=>'required',
            'Foto'=>'required',
        ]);
        $user->name=$request->Name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role=$request->Role;
        // $user->foto=$request->Foto;
        $file = $request->file('Foto');
        $fileName = $file->getClientOriginalName();
        echo "File : ".$fileName;
        //Untuk Mendapatkan Extension
        $extension =$file->extension();

        //Untuk Menyimpan di Database
        $user->foto = 'uploads'.'/'.$fileName;
        $file->move(public_path('uploads'), $fileName);
        $user->save();
        return view('form_login');
    }

    //Upload File
    public function save($request, $user){
        $file = $request->file('Foto');
        $fileName = $file->getClientOriginalName();

        //Untuk Mendapatkan Extension
        $extension =$file->extension();

        //Untuk Menyimpan di Database
        $user->foto = public_path('uploads').'\\'.$fileName;
        $file->move(public_path('uploads'), $fileName);

        return $user->foto;
    }


}