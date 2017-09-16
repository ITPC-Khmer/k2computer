<?php

namespace App\Models\ECBackend;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;


class Slide extends Model
{
    protected $table='slides';
    static function getTitle($id)
    {
        $m = self::find($id);

        if($m != null)
        {
            return $m->brand_name;
        }else{
            return '';
        }


    }

    static function saveData($request)
    {

        $id=$request->id;
        if($id>0)
        {
            $m=Slide::find($id);
        }else
        {
            $m=new Slide();
        }

        $image = '#';
        if($request->hasFile('slide_image')) {
            $image = self::resize($request->slide_image);
            $m->slide_image = $image;
        }

        $m->slide_title=$request->slide_title;
        $m->video_url = $request -> video_url;
        $m->description = $request -> description;
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

            $img->resize(1500, 442, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img2->resize(800, 236, function ($constraint) {
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