<?php

namespace App\Http\Controllers\Backend;
use App\Models\ECBackend\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index()
    {
        $result = Admin::orderBy('id','desc')->paginate(10);
        return view('backend.admin.index',['result'=>$result]);
    }

    function form()
    {
        return view('backend.admin.form',['row' => null]);
    }
    function delete($id)
    {
        Admin::find($id)->delete();
        return redirect()->back();
    }
    function edit( $id)
    {
        $row = Admin::find($id);
        return view('backend.user.form',['row'=>$row]);
    }
    function save(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        if (Admin::saveData($request) != null){
            return redirect('backend/user');
        }else{
            return redirect()->back();
        }

    }
}
