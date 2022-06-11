<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManajemenUser;

class UserController extends Controller
{
    public function createUser(ManajemenUser $manajemenuser, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'deskripsi' => 'required|max:255',
        ]);

        $file = $request->file('foto');
        // print_r($file);die();

        // print_r($file);die();
        $manajemenuser = new ManajemenUser;
        $manajemenuser->fullname = $request->name;
        $manajemenuser->email = $request->email;
        $manajemenuser->password = bcrypt($request->password);
        $manajemenuser->deskripsi = $request->deskripsi;
        if(empty($file)){

        }else{
            $fileName = $file->getClientOriginalName();
            //untuk mendapatkan extensi
            $date = date('Y-m-d_i:h:s').'_';
            
            $extension = $file->extension();
            $file->move(public_path('foto'), $date.$fileName);
            $foto = $manajemenuser->foto = 'foto/'.$date.$fileName;
            
        }
        $manajemenuser->save();
        if($manajemenuser->save()){
        return back()->with('success', 'Berhasil membuat user baru');
        }
        return back()->with('errors', 'Gagal membuat user baru, mohon mencoba lagi');
    }

    public function getAllDataUser(){
        $manajemenuser =  ManajemenUser::all();
        return view('/tugas.home', ['users' => $manajemenuser]);
    }

    public function createPost(AdminCategory $admincategory, Request $request)
    {
        $request->validate([
            'jenis_kategori' => 'required|max:50',
            'status' => 'required',
        ]);

        // print_r($file);die();
        $admincategory = new AdminCategory;
        $admincategory->jenis_kategori = strtoupper($request->jenis_kategori);

        $admincategory->save();
        if($admincategory->save()){
        return back()->with('success', 'Kategori berhasil ditambah');
        }
        return back()->with('errors', 'Gagal membuat user baru, mohon mencoba lagi');
    }
}
