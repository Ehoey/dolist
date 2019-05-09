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
    public function create(){
        return view('dolists.create');
    }
    public function store(){
        $this->validate(request(),[
            'name'=>'required|min:3|max:12',
            'description'=>'required'
        ]);
        $data=request()->all();
        $dolist=new dolist();
        $dolist->newDolist($data);
        return redirect('/dolists');
    }
}
