<?php

namespace App\Http\Controllers;

use App\Models\User;

class TopController extends Controller
{
    public function index(User $user)
    {
        $users = $user->orderByDesc ('balance')->get ();
        return view ('top', compact ('users'));
    }
}
