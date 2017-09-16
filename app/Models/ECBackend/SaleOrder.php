<?php

namespace App\Models\ECBackend;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SaleOrder extends Model
{

    protected $table = 'sale_orders';

    public static function saveData($request, $m_id)
    {
        $items = CartFacade::getContent();

        $m = new static();

        $m->member_id = $m_id;
        $m->order_date = DB::raw('now()');
        $m->require_date = DB::raw('now()');
        $m->require_date = DB::raw('now()');
        $m->total_amount = CartFacade::getTotal();
        $m->total_qty = CartFacade::getTotalQuantity();
        $m->note = $request->note;
        $m->order_status = 0;

        if ($m->save()) {
            foreach ($items as $item) {
                $im = New SaleOrderDetail();

                $im->sale_order_id = $m->id;
                $im->item_id = $item->id;
                $im->qty = $item->quantity;
                $im->price = $item->price;
                $im->discount = 0;
                $im->amount = $item->quantity * $item->price;

                $im->save();

            }

            CartFacade::clear();
            return $m;
        }

    }

}
