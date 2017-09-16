<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $appends = ['full_name'];

    public function getFullNameAttributes(){
        return $this->first_name . ' '. $this->last_name;
    }

    public static function saveData($request)
    {
        $id = $request->id;
        if ($id > 0) {
            $m = self::find($id);
        } else {
            $m = new static();
        }

        $m->first_name = $request->first_name;
        $m->last_name = $request->last_name;
        $m->phone = $request->phone;
        $m->email = $request->email;
        $m->company_name = $request->company_name;
        $m->address = $request->address;
        $m->password = bcrypt($request->password);

        if($m->save()){
            return $m;
        }else{
            return null;
        }

    }

    public static function memberRegister($request){

        $m = self::saveData($request);
        if($m != null){
            session([
                'm_id' => $m->id,
                'm_first_name' => $m->first_name,
                'm_last_name' => $m->last_name,
                'm_phone' => $m->phone,
                'm_email' => $m->email,
                'm_company_name' => $m->company_name,
                'm_address' => $m->address,
            ]);

            return $m;
        }else{
            return null;
        }



    }

}
