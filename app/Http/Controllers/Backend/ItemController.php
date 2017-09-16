<?php

namespace App\Http\Controllers\Backend;

use App\Models\ECBackend\Item;
use App\Models\ECBackend\ItemSpace;
use App\Models\ECBackend\ItemSpaceDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    //

    function index()
    {
        $result = Item::orderBy('id','desc')->paginate(10);

        return view('backend.item.index',['result'=>$result]);
    }
        function search_item(Request $request)
    {
        $q = $request->q;
        $result = Item::where('title','like','%'.$q.'%')->orWhere('description','like','%'.$q.'%')->get();
        return view('backend.item.search-item',['result'=>$result]);
    }
    function sale()
    {
        $result = Item::orderBy('id','desc')->paginate(50);

        return view('backend.item.user',['result'=>$result]);
    }
    function form()
    {
        return view('backend.item.form',['row' => null]);
    }
    function edit( $id)
    {
        $row = Item::find($id);
        return view('backend.item.form',['row'=>$row]);
    }
    function save(Request $request)
    {
        if($request->ajax())
        {
            if($request->hasFile('files')) {
                $files = $request->file('files');
                $json = Item::upload($files, true);
                return response()->json($json);
            }else{
                return response()->json([]);
            }

        }else{
            $this->validate($request,['title'=>'required']);
            $id = $request->id;
            if($id ==0)
            {
                $m = new Item();
            }else
            {
                $m = Item::find($id);
            }
            $m->category_id = $request -> category_id;
            $m->brand_id = $request -> brand_id;
            $m->code = $request -> code;
            $m->url_detail = $request -> url_detail;
            $m ->title = $request->title;
            $m->option = json_encode($request->option);
            $m->start_price = $request -> start_price;
            $m->promotion_price = $request -> promotion_price;
            $m->promotion_expire_date = $request -> promotion_expire;
            $m->status = $request->status;

            $m->image_url = json_encode($request->image_url);

            $m->description = $request->description;

            if($m->save())
            {
                //=============== ItemFeatureDetail ====================
             /*  ItemFeatureDetail::where('item_id',$m->id)->delete();

                if(count($request->feature_id )>0) {
                    foreach ($request->feature_id  as $c_id) {
                        $ItemFeatureDetail = new ItemFeatureDetail();
                        $ItemFeatureDetail->item_id  = $m->id;
                        $ItemFeatureDetail->feature_id = $c_id;
                        $ItemFeatureDetail->save();
                    }*/

                //=============== ItemSpaceDetail ====================


                ItemSpaceDetail::where('item_id',$m->id)->delete();

                if($request->spec_id != null && count($request->spec_id)>0)
                {
                    $spec_value = $request->spec_value;
                    foreach ($request->spec_id as $sp_id) {
                        $postTagDetail = new ItemSpaceDetail();
                        $postTagDetail->item_id = $m->id;
                        $postTagDetail->spec_id = $sp_id;
                        $postTagDetail->spec_value = $spec_value[$sp_id];
                        $postTagDetail->save();
                    }
                }




                if(count($request->image_url)>0){

                    foreach ($request->image_url as $img)
                    {
                        Item::moveTmpFile($img);
                    }

                }


                return redirect('backend/item.html');
                // return redirect()->back();
            }else{

                return redirect()->back();
            }
        }


    }
    function delete($id)
    {
        Item::find($id)->delete();
        return redirect()->back();
    }



    function getSpec(Request $request)
    {
        $category_id = $request->category_id;

        $m = ItemSpace::where('category_id',$category_id)->get();

        return response()->json($m);


    }

}

