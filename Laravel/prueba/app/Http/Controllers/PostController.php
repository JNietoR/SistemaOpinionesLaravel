<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function store(Request $request){
        return $request;
    }
    public function destroy(){
        //eliminar
    }
}

