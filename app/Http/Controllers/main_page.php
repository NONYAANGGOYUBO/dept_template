<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class main_page extends Controller
{
    public function show(){
        $dbaddress = About::where('id','=',1)->first();

        return view('welcome',[
            'dbaddress' => $dbaddress,
        ]);
    }
}
