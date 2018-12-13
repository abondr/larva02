<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bear;
use \App\Tree;
class BearsController extends Controller
{
    public function listBear(){
        $bears = Bear::all();
        foreach($bears as $bear){
            echo "<br>/****************/";
            echo "<br>bear {$bear->name}";
            echo "<br> tree age ".$bear->tree->age;
            foreach($bear->fishes as $fish){
                echo "<br>&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.";
                echo "type = {$fish->type} ,weight = {$fish->weight} {$fish->bear->name}";
            }
            
        }

       // return view('bears.list',compact('bears'));
        
    }
    public function treeDetails($id){

    }
}
