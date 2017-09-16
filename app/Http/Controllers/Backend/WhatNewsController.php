<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\Whatnews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhatNewsController extends Controller
{
    function index()
    {
        $result = Whatnews::orderBy('id','desc')->paginate(20);
        return view('backend.what-news.index',['result'=>$result]);
    }

    function form()
    {
        return view('backend.what-news.form',['row' => null]);
    }
    function delete($id)
    {

        Whatnews::find($id)->delete();
        return redirect()->back();
    }
    function edit( $id)
    {
        $row =Whatnews::find($id);
        return view('backend.what-news.form',['row'=>$row]);
    }
    function save(Request $request){

        $this->validate($request,[
            'title' => 'required',

        ]);

        if (Whatnews::saveData($request) != null){
            return redirect('backend/what-news');
        }else{
            return redirect()->back();
        }

    }

}

