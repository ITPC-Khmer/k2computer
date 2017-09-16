<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\ItemBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //
    function index()
    {
        $result = ItemBrand::orderBy('id','desc')->paginate(10);
        return view('backend.brand.index',['result'=>$result]);
    }
    function form()
    {
        return view('backend.brand.form',['row' => null]);
    }
    function save(Request $request){

        $this->validate($request,[
            'title' => 'required',

        ]);

        if (ItemBrand::saveData($request) != null){
            return redirect('backend/brand.html');
        }else{
            return redirect()->back();
        }

}
    function edit( $id)
    {
        $row = ItemBrand::find($id);
        return view('backend.brand.form',['row'=>$row]);
    }
    function delete($id)
    {
        ItemBrand::find($id)->delete();
        return redirect()->back();
    }
}
