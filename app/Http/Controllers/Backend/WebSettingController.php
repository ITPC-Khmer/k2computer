<?php

namespace App\Http\Controllers\Backend;
use App\Models\ECBackend\WebSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebSettingController extends Controller
{
    //
    function index()
    {
        $rows = WebSetting::orderBy('key_type')->get();
        return view('backend.web-setting.index',['rows'=>$rows]);
    }
    function saveText( Request $request)
    {
        if(WebSetting::saveData($request) !=null)
        {
            return response()->json(['error'=>0]);
        }else
            {
                return response()->json(['error=1']);
            }
    }
    function saveFile(Request $request)
    {
       $m = WebSetting::saveFile($request);
       if($m !=null)
       {
        return '<script>parent.showMyImage("'.$m->id.'","'.asset("uploads/files/$m->key_value").'");</script>';
       }else
           {
               return '<script>alert("Save error!!");</script>';
           }
    }
}
