<?php

namespace App\Http\Controllers;

use App\Member;
use App\Models\ECBackend\SaleOrder;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function Checkout(Request $request){

        if($request->session()->has('m_id')){
            $m_id = $request->session()->get('m_id');
            if($m_id>0){
                $m = SaleOrder::saveData($request,$m_id);
                return 'OK';
            }
        }

        $m = Member::memberRegister($request);

        if($m != null){


            $m = SaleOrder::saveData($request,$m->id);
            return 'OK';
        }

        return 'NO';

    }
}
