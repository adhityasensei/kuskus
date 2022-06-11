<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminCategory;
use App\Models\Thread;
use App\Models\Iklan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WebController extends Controller
{
    //untuk semua role user
    public function index(){
        $category =  AdminCategory::where('status', 'tampilkan')->orderBy('created_at', 'asc')->take(5)->get();
        $kuskusCount = DB::table('thread')
            ->leftJoin('kategori_thread', 'thread.id_kategori', '=', 'kategori_thread.id')
            ->leftJoin('komentar', 'thread.id', '=', 'komentar.id_post')
            ->select(DB::raw("kategori_thread.jenis_kategori as kategori"), DB::raw("count(thread.id) as thread_count"), DB::raw("count(komentar.id) as komentar_count"))
            ->groupBy("kategori_thread.jenis_kategori")
            ->get();
        $iklan =  DB::table('iklan')->take(2)->get();
        $hotthread = DB::table('thread')
        ->leftJoin('kategori_thread', 'thread.id_kategori', '=', 'kategori_thread.id')
        ->leftJoin('users', 'thread.id_user', '=', 'users.id')
        ->select(DB::raw("kategori_thread.jenis_kategori as kategori"), DB::raw("thread.judul as judul"), DB::raw("users.fullname as namauser"), DB::raw("thread.created_at as waktupost"))
        ->groupBy("thread.id")
        ->get();
        return view('content.home')->with('category',$category)->with('kuskusCount',$kuskusCount)->with('iklan',$iklan)->with('hotthread',$hotthread);
    }

    public function login(){
        return view('auth.login');
    }
    public function category(){
        $category =  AdminCategory::all();
        return view('content.home')->with('category',$category);
        //   return view('entries.show')->with('entries',$entry)->with('random',$random);
    }

    public function formUser(){
        return view('content.createUser');
    }

    public function newPost(){
        $category =  AdminCategory::all();
        return view('content.createPost')->with('category',$category);
        //   return view('entries.show')->with('entries',$entry)->with('random',$random);
    }

    //Untuk Role Admin
    public function formKategori(){
        return view('content.createKategori');
    }

    public function formiklan(){
        return view('content.createIklan');
    }

    public function admin(){
        return view('admin');
    }

    public function editUser(){
        return view('content.editUser');
    }

    //Function bersama
    public function createPost(Thread $thread, Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'status' => 'required',
            'judul' => 'required|max:255',
            'isi_thread' => 'required',
        ]);

        // print_r($file);die();
        $thread = new Thread;
        $thread->id_kategori = $request->id_kategori;
        $thread->status = $request->status;
        $thread->judul = $request->judul;
        $thread->isi_thread = $request->isi_thread;
        $thread->id_user = Auth::user()->id;

        $thread->save();
        if($thread->save()){
        return back()->with('success', 'Thread Baru berhasil di tambah');
        }
        return back()->with('errors', 'Gagal membuat user baru, mohon mencoba lagi');
    }
}
