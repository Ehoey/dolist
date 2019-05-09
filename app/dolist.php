<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dolist extends Model
{
    public function newDolist($data){

        try{

            $dolist=new dolist;
            $dolist->name=$data['name'];
            $dolist->description=$data['description'];
            $dolist->completed=false;
            $dolist->save();
        }catch (\Exception $e){

            return false;

        }
    }
    public function updateData($data,$dolistId){


        try{

            $dolist=dolist::find($dolistId);
            $dolist->name=$data['name'];
            $dolist->description=$data['description'];
            $dolist->completed=false;
            $dolist->save();


        }catch (\Exception $e){

            return false;

        }
    }
    public function deleteData($dolistId){

        try{

            $dolist=dolist::find($dolistId);
            $dolist->delete();
            session()->flash('success','dolist deleted successfully');


        }catch (\Exception $e){

            return false;

        }
    }
}
