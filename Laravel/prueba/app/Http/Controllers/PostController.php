<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function store(Request $request){
        $request->validate(['body' => 'required']);

        // formas de enviar un array
        // dd($request->only('body'));
        // dd(['body => $request->body]);

        $request->user()->posts()->create($request->only('body'));

        return back()->with('status', 'Post guarado exitosamente');
    }
    public function destroy(){
        //eliminar
    }
}

