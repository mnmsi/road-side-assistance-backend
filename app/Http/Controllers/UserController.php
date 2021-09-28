<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //

    public function storeUser(Request $request)
    {
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->lat = $request->lan;
        $user->role_id = 1;
        $user->password = Hash::make($request->password);
        $user->avatar = $request['avatar']->store('images/user','public');
        $user->save();
        return ['status'=>true,'data'=>$user];
    }
}
