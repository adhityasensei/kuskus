<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManajemenUser;
use App\Models\AdminCategory;
use App\Models\Iklan;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function createUser(ManajemenUser $manajemenuser, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
            'deskripsi' => 'required|max:255',
        ]);

        $file = $request->file('foto');
        // print_r($file);die();

        // print_r($file);die();
        $manajemenuser = new ManajemenUser;
        $manajemenuser->fullname = $request->name;
        $manajemenuser->email = $request->email;
        $manajemenuser->password = bcrypt($request->password);
        $manajemenuser->role = $request->role;
        $manajemenuser->deskripsi = $request->deskripsi;
        if(empty($file)){

        }else{
            $fileName = $file->getClientOriginalName();
            //untuk mendapatkan extensi
            $date = date('Y-m-d_i:h:s').'_';
            
            $extension = $file->extension();
            $file->move(public_path('foto/user'), $date.$fileName);
            $manajemenuser->foto = 'foto/user/'.$date.$fileName;
            
        }
        $manajemenuser->save();
        if($manajemenuser->save()){
        return back()->with('success', 'Berhasil membuat user baru');
        }
        return back()->with('errors', 'Gagal membuat user baru, mohon mencoba lagi');
    }

    public function getCategory(){
        $category =  AdminCategory::all();
        return view('content.home')->with('category',$category);
        //   return view('entries.show')->with('entries',$entry)->with('random',$random);
    }
    
    public function createCategory(AdminCategory $admincategory, Request $request)
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
        return back()->with('errors', 'Gagal membuat kategori baru, mohon mencoba lagi');
    }

    public function createIklan(Iklan $iklan, Request $request)
    {
        $request->validate([
            'judul_iklan' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        // print_r($file);die();
        $file = $request->file('foto');

        $iklan = new Iklan;
        $iklan->judul_iklan = $request->judul_iklan;
        $iklan->deskripsi = $request->deskripsi;
        $iklan->created_by = Auth::user()->id;
        if(empty($file)){

        }else{
            $fileName = $file->getClientOriginalName();
            //untuk mendapatkan extensi
            $date = date('Y-m-d_i:h:s').'_';
            
            $extension = $file->extension();
            $file->move(public_path('foto/iklan'), $date.$fileName);
            $iklan->foto = 'foto/iklan/'.$date.$fileName;
            
        }
        $iklan->save();
        if($iklan->save()){
        return back()->with('success', 'Iklan berhasil ditambah');
        }
        return back()->with('errors', 'Gagal membuat iklan baru, mohon mencoba lagi');
    }
}
