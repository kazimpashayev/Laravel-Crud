<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class Dashboard extends Controller
{
    
    public function index() {
        $data['posts'] = Posts::all();
        return view('back.dashboard',$data);
    }


}
