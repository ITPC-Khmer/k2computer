<?php

namespace App\Http\Controllers;


use App\Models\ECBackend\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        $row = Admin::where('email',$email)->first();

        if($row != null)
        {
            if(Hash::check($password,$row->password))
            {
                session([
                    'u_key' => 'key',
                    'u_id' => $row->id,
                    'u_name' => $row->name,
                    'u_role' => $row->role
                ]);

                if($row->role=='admin'){
                    return redirect('backend/item.html');
                }
                elseif ($row->role == 'user')
                {
                    return redirect('backend/item-sale.html');
                }

            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }


    }

    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }

    function m_logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }


}
