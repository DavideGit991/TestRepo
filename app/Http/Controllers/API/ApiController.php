<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public  function get_user_posts()
    {
        
        $users = User::with('posts')->active()->get();
    
        return response()->json($users,201);
    }
}
