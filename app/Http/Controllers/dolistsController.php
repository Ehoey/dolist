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
        session()->flash('success','dolist created successfully');
        return redirect('/dolists');

    }
    public function edit($dolistId){

        return view('dolists.edit')->with('dolists',dolist::find($dolistId));

    }
    public function update($dolistId){
        $this->validate(request(),[
            'name'=>'required|min:3|max:12',
            'description'=>'required'
        ]);

        $data=request()->all();
        $dolist= dolist::find($dolistId);
        $dolist->updateData($data,$dolistId);
        session()->flash('success','dolist created successfully');
        return redirect('/dolists');

    }
    public function destroy($dolistId){

        $dolist=new dolist;
        $dolist->deleteData($dolistId);
        session()->flash('success','dolist deleted successfully');
        return redirect('/dolists');

    }
}
