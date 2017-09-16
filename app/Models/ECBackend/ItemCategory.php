<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class ItemCategory extends Model
{
    protected $table ='item_categories';

    static function getParentOption($select = 0,$parent = 0,$level = 0)
    {
        $op = '';
        $result = self::where('parent', $parent)->get();
        if (count($result) > 0) {
            foreach ($result as $row) {
                $result2 = self::where('parent', $row->id)->get();

                $select_op = $select == $row->id ? ' selected = "selected" ' : '';
                if (count($result2) > 0)/// have child
                {
                    $op .= '<option ' . $select_op . ' value="' . $row->id . '">' . str_repeat('&nbsp;', $level) . $row->title . '</option>';
                    $op .= self::getParentOption($select, $row->id, $level + 5);

                } else { // no child
                    $op .= '<option ' . $select_op . ' value="' . $row->id . '">' . str_repeat('&nbsp;', $level) . $row->title . '</option>';

                }

            }
        }
        return $op;
    }

    static function getParentOptionMulti($select = [],$parent = 0,$level = 0)
    {

        $select = $select == null?[]:$select;
        $select = is_array($select)?$select:json_decode($select);
        $select = count($select)>0?$select:[];

        $op = '';
        $result = self::where('parent', $parent)->get();
        if (count($result) > 0) {
            foreach ($result as $row) {
                $result2 = self::where('parent', $row->id)->get();

                $select_op = in_array($row->id,$select)? ' selected = "selected" ' : '';
                if (count($result2) > 0)/// have child
                {
                    $op .= '<option ' . $select_op . ' value="' . $row->id . '">' . str_repeat('&nbsp;', $level) . $row->title . '</option>';
                    $op .= self::getParentOptionMulti($select, $row->id, $level + 5);

                } else { // no child
                    $op .= '<option ' . $select_op . ' value="' . $row->id . '">' . str_repeat('&nbsp;', $level) . $row->title . '</option>';

                }

            }
        }
        return $op;
    }

    static function getTitle($id)
    {
        $m = self::find($id);

        if($m != null)
        {
            return $m->title;
            //return $m->option;
        }else{
            return '';
        }

    }

static function getImage($id)
    {
        $m = self::find($id);

        if($m != null)
        {
            return $m->image_url;
            //return $m->option;
        }else{
            return '';
        }

    }

    static function saveData($request)
    {

        $id=$request->id;
        if($id>0)
        {
            $m=ItemCategory::find($id);
        }else
        {
            $m=new ItemCategory();
        }

        $image = '#';
        if($request->hasFile('image')) {
            $image = self::resize($request->image);
            $m->image_url = $image;
        }

        $m->title=$request->title;
        $m->description=$request -> description;
        $m->parent = $request -> parent;
        $m->option = json_encode($request -> option);
        $m->status = $request -> status;

        if ($m->save()){

            return $m;
        }else{
            return null;
        }
    }


    static function resize($image, $tmp = false)
    {
        $uploads = $tmp == false ? 'uploads/files' : 'uploads/_files';

        try {
            $extension = $image->getClientOriginalExtension();
            $imageRealPath = $image->getRealPath();

//$fullName = $image->getClientOriginalName();
            $imageName = rand(11111, 99999) . '_' . time() . '.' . $extension;
            $thumbName = 'tmp1/' . $imageName;
            $thumbName2 = 'tmp2/' . $imageName;

//$imageManager = new ImageManager(); // use this if you don't want facade style code
//$img = $imageManager->make($imageRealPath);

            $img = Image::make($imageRealPath); // use this if you want facade style code
            $img2 = Image::make($imageRealPath); // use this if you want facade style code

            $img->resize(600, 400, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img2->resize(80, 80, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image->move(public_path($uploads), $imageName);

            /*// draw transparent text
            $img->text('camsmile.org', 100, 100, function($font) {
            $font->file(public_path('news/fonts/fontawesome-webfontba72.ttf'));
            $font->color(array(255, 255, 255, 0.5));
            $font->size(30);
            $font->color('#fdf6e3');
            $font->align('center');
            $font->valign('middle');
            $font->angle(45);
            });*/

            $img->save(public_path($uploads) . '/' . $thumbName);
            $img2->save(public_path($uploads) . '/' . $thumbName2);
            return $imageName;
        } catch (Exception $e) {
            return '#';
        }
    }

}
