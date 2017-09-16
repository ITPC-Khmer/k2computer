<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    function index()
    {
        $result = Slide::orderBy('id','desc')->paginate(10);
        return view('backend.slide.index',['result'=>$result]);
    }
    function form()
    {
        return view('backend.slide.form',['row' => null]);
    }
    function save(Request $request){

        $this->validate($request,[
            'slide_title' => 'required',

        ]);

        if (Slide::saveData($request) != null){
            return redirect('backend/slide.html');
        }else{
            return redirect()->back();
        }

    }
    function edit( $id)
    {
        $row = Slide::find($id);
        return view('backend.slide.form',['row'=>$row]);
    }
    function delete($id)
    {
        Slide::find($id)->delete();
        return redirect()->back();
    }
}
