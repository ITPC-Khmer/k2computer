<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class Admin extends Model
{
    protected $table='users';

    static function saveData($request)
    {

        $id=$request->id;
        if($id>0)
        {
            $m=Admin::find($id);
        }else
        {
            $m=new Admin();
        }
        $m->name=$request->name;
        $m->email=$request -> email;
        $m->password = Hash::make($request -> password);
        $m->role = $request -> role;

        if ($m->save()){
            return $m;
        }else{
            return null;
        }
    }
}
