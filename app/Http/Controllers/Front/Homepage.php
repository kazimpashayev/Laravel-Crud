<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class Homepage extends Controller
{
    public function index() {
        return view('front.home');
    }
}
