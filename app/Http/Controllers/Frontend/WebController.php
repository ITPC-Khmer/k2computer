<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ECBackend\Item;
use App\Models\ECBackend\Whatnews;
use App\Models\Frontend\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    //
    function index()
    {
        return view('frontend.web.index');
    }

    function category(Request $request)
    {
        $cat_id = $request->category_id;
        $brand_id = $request->brand_id;
        $result = Web::getCateProduct($cat_id,$brand_id);
        return view('frontend.web.category',['result'=>$result]);
    }
    function what_news()
    {
        $rows = Whatnews::orderBy('id','desc')->paginate(20);
        return view('frontend.web.what_news',['rows' => $rows]);
    }

    function search(Request $request)
    {
        $q = $request->q;
        $category_id = $request->category_id;

        $result = Web::getSearchProduct($q,$category_id);
        return view('frontend.web.category',['result'=>$result,'q'=>$q,'category_id'=>$category_id]);
    }

    function detail($id)
    {
        $row=Item::find($id);
        return view('frontend.web.detail',['row'=>$row]);
    }

    function chat()
    {
        $cartCollection = Cart::getContent();
        return view('frontend.web.chat',['items' => $cartCollection,'cartTotal' => Cart::getTotal()]);

    }

    function what_news_detail($id)
    {
        $row=Whatnews::find($id);
        return view('frontend.web.detail_what_news',['row'=>$row]);
    }

}
