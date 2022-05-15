<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function userPosts(): JsonResponse
    {
        $users = User::with('posts')->active()->get();

        return response()->json($users, 201);
    }
}
