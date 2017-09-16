<?php

namespace App\Models\Frontend;

use App\Models\ECBackend\Item;
use App\Models\ECBackend\ItemBrand;
use App\Models\ECBackend\ItemCategory;
use App\Models\ECBackend\Slide;
use App\Models\ECBackend\Whatnews;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{

    static  function  getItemPrice($start_price,$promotion_price,$promotion_expire_date)
    {
        if($promotion_expire_date == '' || $promotion_expire_date == null) return [$start_price,''];

        $arr = [0,''];
        if (Carbon::now() <= Carbon::createFromFormat('Y-m-d', $promotion_expire_date))
        {
            $arr[0] = $promotion_price;

        }else{
            $arr[0] = $start_price;

        }

        return $arr;

    }

    static function getNewProduct()
    {
        $rows = Item::where('status',1)->orderBy('id','DESC')->limit(6)->get();
        return $rows;

    }


    static function getHomeCateProduct($cat_id,$limit=6)
    {
        $rows = Item::where('category_id',$cat_id)->where('status',1)->orderBy('id','DESC')->limit($limit)->get();
        return $rows;

    }

    static function getCateProduct($cat_id,$brand_id = 0,$limit=20)
    {
        if($cat_id > 0)
        {
            $rows = Item::where('category_id',$cat_id)->where('status',1)->orderBy('id','DESC')->paginate($limit);
            $rows->appends(['category_id' => $cat_id]);
        }
        elseif ($brand_id > 0)
        {
            $rows = Item::where('brand_id',$brand_id)->where('status',1)->orderBy('id','DESC')->paginate($limit);
            $rows->appends(['brand_id' => $brand_id]);
        }
        else{
            $rows = Item::orderBy('id','DESC')->where('status',1)->paginate($limit);
        }

        return $rows;

    }

    static function getSearchProduct($q,$category_id,$limit=20)
    {
        if($category_id > 0)
        {
            $rows = Item::where('category_id',$category_id)->where('status',1)
            ->where(function ($query) use ($q){
                $query->where('title','LIKE','%'.$q.'%');
                    /*->orWhere('description','LIKE','%'.$q.'%')
                    ->orWhere('category_id','LIKE','%'.$q.'%');*/
            })
            ->orderBy('id','DESC')->paginate($limit);

        }else{
            $rows = Item::where('title','LIKE','%'.$q.'%')->where('status',1)
                ->orWhere('description','LIKE','%'.$q.'%')
                ->orderBy('id','DESC')->paginate($limit);

        }

        $rows->appends(['q' => $q,'category_id'=>$category_id]);

        return $rows;

    }

    static function getHomeBrand()
    {
        $rows = ItemBrand::orderBy('id','ASC')->get();
        return $rows;

    }
    static function getHomeSlide()
    {
        $rows = Slide::orderBy('id','ASC')->get();
        return $rows;

    }
    static function getNews()
    {
        $rows = Whatnews::orderBy('id','DESC')->get();
        return $rows;

    }



}
