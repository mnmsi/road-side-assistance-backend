<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    //

    public function storeRole(Request $request)
    {
        try {
            $role = new UserRole();
            $role->name = $request->name;
            $role->slug =str_replace(' ','_', strtolower($request->name));
            $role->save();
            return ['status'=>true,'data'=>$role];
        }catch (\Exception $e)
        {
            return ['status'=>false,'message'=>'something went wrong'];
        }
    }
}
