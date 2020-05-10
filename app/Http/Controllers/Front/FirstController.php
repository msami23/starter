<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public  function  index(){
        $data =[];
        $data ['age'] =24;
        $data['string']='Mohammed Sami';
        return view('welcome',$data);
    }
}
