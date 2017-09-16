<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;

class ItemFeature extends Model
{
    //
    protected $table='item_features';

    static function getTitle($id)
    {
        $m = self::find($id);

        if($m != null)
        {
            return $m->title;
        }else{
            return '';
        }


    }

    static function saveData($request)
    {

        $id=$request->id;
        if($id>0)
        {
            $m=ItemFeature::find($id);
        }else
        {
            $m=new ItemFeature();
        }
        $m->title=$request->title;
        $m->description=$request -> description;
        $m->category_id = $request -> category_id;
        $m->option = $request -> option;
        $m->status = $request -> status;

        if ($m->save()){
            return $m;
        }else{
            return null;
        }
    }
}
