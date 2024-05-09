<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class main_page extends Controller
{
    public function show(){
        $about = About::where('id','=',1)->first();
        if($about===null){
            $about = 'Empty';
        }
        else{
            $about = $about->about;
        }

        return view('welcome',[
            'about' => $about,
        ]);
    }
}
