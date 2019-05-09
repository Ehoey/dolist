<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dolist extends Model
{
    public function newDolist($data){
        $dolist= new dolist;
        $dolist->name=$data['name'];
        $dolist->description=$data['description'];
        $dolist->completed=false;
        $dolist->save();
    }
}
