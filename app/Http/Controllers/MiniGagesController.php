<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniGagesController extends Controller
{
    public function index()
    {
        return view('minigames');
    }
}
