<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $article = new Article;
        $file = $request->file('uploadfile');
         $fileName = $file->getClientOriginalName();

        //untuk mendapatkan extensi
        $extension = $file->extension();

        //untuk menyimpan di database
        $article->picture = 'uploads/'.$fileName;
        $article->save();

        $file->move(public_path('uploads'), $fileName);

        return redirect('/');
    }

    public function editPost(Request $request)
    {

    }

    public function deletePost(Request $request){

    }
}
