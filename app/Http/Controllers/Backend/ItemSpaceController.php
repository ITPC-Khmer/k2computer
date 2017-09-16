<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\ItemSpace;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemSpaceController extends Controller
{
    //
    function index()
{
$result = ItemSpace::orderBy('id','desc')->paginate(10);
return view('backend.item-space.index',['result'=>$result]);
}

function form()
{
    return view('backend.item-space.form',['row' => null]);
}
function delete($id)
{
    ItemSpace::find($id)->delete();
    return redirect()->back();
}
function edit( $id)
{
    $row = ItemSpace::find($id);
    return view('backend.item-space.form',['row'=>$row]);
}
function save(Request $request)
{

    $this->validate($request, [
        'title' => 'required',

    ]);

    if (ItemSpace::saveData($request) != null) {
        return redirect()->back();
    } else {
        return redirect('backend/item-space.html');
    }
}
}