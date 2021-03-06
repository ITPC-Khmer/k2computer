<?php
Route::get('login','LoginController@index');
Route::post('login','LoginController@login');

Route::get('logout','LoginController@logout');

Route::get('m_logout','LoginController@m_logout');

Route::get('add-cart',function (\Illuminate\Http\Request $request){
    // array format
/*    Cart::add(array(
        'id' => 456,
        'name' => 'Sample Item',
        'price' => 67,
        'quantity' => 1,
        'attributes' => array()
    ));*/

/*    Cart::update(456, array(
        'name' => 'New Item Name', // new item name
        'price' => 98.67, // new item price, price can also be a string format like so: '98.67'
        'quantity' => -1,
    ));

    Cart::update(456, array(
        'quantity' => array(
            'relative' => false,
            'value' => 1
        ),
    ));

    Cart::remove(456);*/
//    Cart::clear();

    Cart::add(array(
        'id' => $request->id,
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'attributes' => [
            'image' => $request->image
        ]
    ));

    $cartCollection = Cart::getContent();
    return response()->json(['items' => $cartCollection,'cartTotal' => Cart::getTotal()]);

});


Route::get('remove-cart',function (\Illuminate\Http\Request $request){
    Cart::remove($request->id);
    $cartCollection = Cart::getContent();
    return response()->json(['items' => $cartCollection,'cartTotal' => Cart::getTotal()]);
});

Route::get('all-cart',function (\Illuminate\Http\Request $request){
   /* Cart::remove($request->id);*/
    $cartCollection = Cart::getContent();
    return response()->json(['items' => $cartCollection,'cartTotal' => Cart::getTotal()]);
});

Route::get('/checkout',function (){
    $cartCollection = Cart::getContent();
    return view('frontend.web.chat',['items' => $cartCollection,'cartTotal' => Cart::getTotal()]);
});

Route::get('/thanks',function (){
    return view('thanks');
});



Route::get('/my-account',function (\Illuminate\Http\Request $request){
    if(session('m_id')>0) {
        $mo = \App\Models\ECBackend\SaleOrder::where('member_id',session('m_id'))
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('my_account',['mo' => $mo]);
    }else{
        return redirect('account-login');
    }
});


Route::get('/my-account/product-detail',function (\Illuminate\Http\Request $request){
    if(session('m_id')>0) {
        $id = $request->id;
        $mo = \App\Models\ECBackend\SaleOrder::where('member_id',session('m_id'))
            ->where('id',$id)->first();

        return view('my_account-detail',['mo' => $mo]);
    }else{
        return redirect('account-login');
    }
});


Route::get('/my-account/change-password',function (\Illuminate\Http\Request $request){
    if(session('m_id')>0) {

        return view('my_account-change-password');
    }else{
        return redirect('account-login');
    }
});

Route::post('/my-account/change-password',function (\Illuminate\Http\Request $request){
    if(session('m_id')>0) {
        $password_old = $request->password_old;
        $password_new = $request->password_new;

        $m = \App\Member::find(session('m_id'));

        if($m != null){

            if(\Illuminate\Support\Facades\Hash::check($password_old,$m->password))
            {
                $m->password = \Illuminate\Support\Facades\Hash::make($password_new);

                $m->save();

                return redirect('my-account');
            }else{
                return redirect()->back();
            }

        }

    }else{
        return redirect('account-login');
    }
});



Route::get('/account-login',function (){
    if(session('m_id')>0){
        return redirect('my-account');
    }else {
        return view('account-login');
    }
});


Route::post('/account-login',function (\Illuminate\Http\Request $request){
    $m = \App\Member::where('email',$request->email)->first();

    if($m != null){

        if(\Illuminate\Support\Facades\Hash::check($request->password,$m->password))
        {
            session([
                'm_id' => $m->id,
                'm_first_name' => $m->first_name,
                'm_last_name' => $m->last_name,
                'm_phone' => $m->phone,
                'm_email' => $m->email,
                'm_company_name' => $m->company_name,
                'm_address' => $m->address,
            ]);
            return redirect('my-account');
        }

    }

    return redirect()->back();
});

Route::post('/account-register',function (\Illuminate\Http\Request $request){
    $m = \App\Member::memberRegister($request);
    if($m != null) {
        return redirect('my-account');
    }else{
        return redirect()->back();
    }
});

Route::get('/backend/search-item','Backend\ItemController@search_item');

Route::post('/checkout','MemberController@Checkout');

Route::group(['namespace'=>'Frontend'],function(){

    Route::get('/','WebController@index');
    Route::get('/category.html','WebController@category');
    Route::get('/what_news','WebController@what_news');
    Route::get('/search','WebController@search');


    Route::get('/detail/{id}','WebController@detail');
    Route::get('/what_news_detail/{id}','WebController@what_news_detail');

});


Route::group(['prefix'=>'backend','namespace'=>'Backend','middleware' =>['admin']],function(){
    // Admin
    Route::get('/user','AdminController@index');
    Route::get('/user-form','AdminController@form');
    Route::get('/user-edit/{id}','AdminController@edit');
    Route::post('/user-save','AdminController@save');
    Route::get('/user-delete/{id}','AdminController@delete');
    //ItemCategory
    Route::get('/item-category.html','ItemCategoryController@index');
    Route::get('/item-category-form.html','ItemCategoryController@form');
    Route::get('/item-category-edit.html/{id}','ItemCategoryController@edit');
    Route::post('/item-category-save.html','ItemCategoryController@save');
    Route::get('/item-category-get-space.html','ItemController@getSpec');
    Route::get('/item-category-delete.html/{id}','ItemCategoryController@delete');
    //what news
    Route::get('/what-news','WhatNewsController@index');
    Route::get('/what-news-form','WhatNewsController@form');
    Route::get('/what-news-edit/{id}','WhatNewsController@edit');
    Route::post('/what-news-save','WhatNewsController@save');
    Route::get('/what-news-delete/{id}','WhatNewsController@delete');
    // Item
    Route::get('/item-feature.html','ItemFeatureController@index');
    Route::get('/item-feature-form.html','ItemFeatureController@form');
    Route::get('/item-feature-edit.html/{id}','ItemFeatureController@edit');
    Route::post('/item-feature-save.html','ItemFeatureController@save');
    Route::get('/item-feature-delete.html/{id}','ItemFeatureController@delete');
    // Item brand
    Route::get('/brand.html','BrandController@index');
    Route::get('/brand-form.html','BrandController@form');
    Route::post('/brand-save.html','BrandController@save');
    Route::get('/brand-edit.html/{id}','BrandController@edit');
    Route::get('/brand-delete.html/{id}','BrandController@delete');
    // Item
    Route::get('/item.html','ItemController@index');

    //Route::get('/item-sale.html','ItemController@sale');
    Route::get('/item-form.html','ItemController@form');
    Route::any('/item-save.html','ItemController@save');
    Route::get('/item-edit.html/{id}','ItemController@edit');
    Route::get('/item-delete.html/{id}','ItemController@delete');
    // Item space
    Route::get('/item-space.html','ItemSpaceController@index');
    Route::get('/item-space-form.html','ItemSpaceController@form');
    Route::post('/item-space-save.html','ItemSpaceController@save');
    Route::get('/item-space-edit.html/{id}','ItemSpaceController@edit');
    Route::get('/item-space-delete.html/{id}','ItemSpaceController@delete');
    // Item brand
    Route::get('/slide.html','SlideController@index');
    Route::get('/slide-form.html','SlideController@form');
    Route::post('/slide-save.html','SlideController@save');
    Route::get('/slide-edit.html/{id}','SlideController@edit');
    Route::get('/slide-delete.html/{id}','SlideController@delete');

    //Web setting
    Route::get('/web-setting','WebSettingController@index');
    Route::post('/web-setting-save-file','WebSettingController@saveFile');
    Route::post('/web-setting-save-text','WebSettingController@saveText');
});


Route::group(['prefix'=>'backend','namespace'=>'Backend','middleware' =>['user']],function(){

    Route::get('/item-sale.html','ItemController@sale');
});

