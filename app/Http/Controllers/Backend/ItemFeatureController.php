<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\ItemFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemFeatureController extends Controller
{
    //
    function index()
    {
        $result = ItemFeature::orderBy('id','desc')->paginate(10);
        return view('backend.item-feature.index',['result'=>$result]);
    }

    function form()
    {
        return view('backend.item-feature.form',['row' => null]);
    }
    function delete($id)
    {
        ItemFeature::find($id)->delete();
        return redirect()->back();
    }
    function edit( $id)
    {
        $row = ItemFeature::find($id);
        return view('backend.item-feature.form',['row'=>$row]);
    }
    function save(Request $request){

        $this->validate($request,[
            'title' => 'required',

        ]);

        if (ItemFeature::saveData($request) != null){
           return redirect('backend/item-feature.html');
        }else{
            return redirect()->back();
        }

    }
}
