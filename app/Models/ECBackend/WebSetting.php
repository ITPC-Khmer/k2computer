<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class WebSetting extends Model
{
    static function saveData($request)
    {
        $id = $request->id;
        $key_value = $request->key_value;
        if($id>0)
        {
            $m = WebSetting::find($id);
            $m->key_value = is_array($key_value)?json_encode($key_value):$key_value;
            if($m->save())
            {
                return $m;
            }else {
                return null;
            }

        }else{
            return null;
        }

    }

    static function saveFile($request)
    {
        $id = $request->id;
        $uploads =  'uploads/files' ;
        if($request->hasFile('my_file') && $id >0)
        {
            try {

                $m = WebSetting::find($id);

                if($m != null){

                    $file = $request->file('my_file');
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(11111, 99999) . '_' . time() . '.' . $extension;
                    $file->move(public_path($uploads), $filename);

                    $old_file = $m->key_value;
                    $m->key_value = $filename;

                    if($m->save())
                    {
                        if($old_file != '') {
                            if (File::exists("$uploads/$old_file")) File::delete("$uploads/$old_file");
                        }
                        return $m;
                    }else{
                        if(File::exists("$uploads/$filename")) File::delete("$uploads/$filename");
                        return null;
                    }
                }
            } catch (Exception $e) {
                return null;
            }

        }else{
            return null;
        }

    }

    static function getSetting($key)
    {
        $m = WebSetting::where('key',$key)->first();
        if($m != null)
        {
            return $m->key_value;
        }else{
            return null;
        }
    }

     static function getSettingArray($key)
    {
        $m = WebSetting::where('key',$key)->first();
        if($m != null)
        {
            return json_decode($m->key_value) ;
        }else{
            return null;
        }
    }



}
