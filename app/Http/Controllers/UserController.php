<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller{

    public  function get_user_posts()
    {

        $users = User::active()->get();
        
        return view("welcome",compact('users'));
    }

}
    
