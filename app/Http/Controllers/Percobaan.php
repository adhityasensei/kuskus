<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Percobaan extends Controller {
    public function getAll(){
        //Masukan Syntax ini di dalam method
        foreach(new_kategori::all() as $comment){
            echo $comment->id_kategori.'|'.$comment->judul.'|'.$comment->isi_post.'|'.$comment->foto.'|'.$comment->id_user.'|'.$comment->view.'</br>';
        }
    }

    public function getBY(Request $request){
        $comment = new_kategori::where('judul','LIKE','%'.$request->name.'%')
        ->orderBy($request->order)
        ->take($request->limit)
        ->get();
        return view('Artikel',['array'=>$comment,'title'=>'Hasil Where Condition...']);
    }

    public function insert(Request $request){
    $comment=new new_kategori;
    $comment->id_kategori=$request->id_kategori;
    $comment->judul=$request->judul;
    $comment->isi_post =$request->isi_post;
    $comment->foto =$request->foto;
    $comment->id_user =$request->id_user;
    $comment->view =$request->view;
    $comment->save();
    $this->getAll();
    }


    public function update(Request $request){
        $comment=new_kategori::where('id',$request->id_kategori)->first();
        $comment->judul=$request->judul;
        $comment->isi_post =$request->isi_post;
        $comment->foto =$request->foto;
        $comment->id_user =$request->id_user;
        $comment->view =$request->view;
        $comment->save();
        $this->getAll();
    }

    public function delete(Request $request){
        $comment=new_kategori::where('id_kategori',$request->id_kategori);
        $comment->delete();
        $this->getAll();
    }

}