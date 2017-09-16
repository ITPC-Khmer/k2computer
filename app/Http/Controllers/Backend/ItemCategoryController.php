<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\ItemCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemCategoryController extends Controller
{
    //
    function index()
    {
        $result = ItemCategory::orderBy('id','desc')->paginate(20);
        return view('backend.item-category.index',['result'=>$result]);
    }

    function form()
        {
            return view('backend.item-category.form',['row' => null]);
        }
    function delete($id)
    {

        ItemCategory::find($id)->delete();
        return redirect()->back();
    }
    function edit( $id)
    {
        $row =ItemCategory::find($id);
        return view('backend.item-category.form',['row'=>$row]);
    }
    function save(Request $request){

        $this->validate($request,[
            'title' => 'required',

        ]);

        if (ItemCategory::saveData($request) != null){
            return redirect('backend/item-category.html');
        }else{
            return redirect()->back();
        }

    }

}
