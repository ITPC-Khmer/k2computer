<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ECBackend\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeCategoryController extends Controller
{
    //
    function index()
    {
        $result = Item::orderBy('id','abc')->paginate(40);
        return view('frontend.category.index',['result'=>$result]);
    }
    function home(){}
}
