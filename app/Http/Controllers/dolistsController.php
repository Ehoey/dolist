<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dolistsController extends Controller
{
    public function index(){
        return view('dolists.index');
    }
}
