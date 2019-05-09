<?php

namespace App\Http\Controllers;

use App\dolist;
use Illuminate\Http\Request;

class dolistsController extends Controller
{
    public function index(){

        return view('dolists.index')->with('dolists',dolist::all());

    }

    public function show($dolistId){

        return view('dolists.show')->with('dolists',dolist::find($dolistId));
    }
}
