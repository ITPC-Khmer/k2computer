<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;

class ItemSpace extends Model
{
    //
    protected $table = 'item_spaces';

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
            $m=ItemSpace::find($id);
        }else
        {
            $m=new ItemSpace();
        }
        $m->title=$request->title;
        $m->category_id=$request->category_id;
        $m->description=$request->description;
        $m->option = $request -> option;

        if ($m->save()){
            return $m;
        }else{
            return null;
        }
    }

    static function getSpecDetail($item_id)
    {
        return self::selectRaw('item_spaces.title,item_space_details.spec_value')
            ->join('item_space_details','item_space_details.spec_id','item_spaces.id')
            ->where('item_space_details.item_id',$item_id)->get();

    }

}
