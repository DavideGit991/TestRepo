<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function userPosts(): Factory|View|Application
    {
        $users = User::active()->get();

        return view('welcome', \compact('users'));
    }
}
