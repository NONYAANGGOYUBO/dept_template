<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class about_page extends Controller
{
    public function editabout(){
        $about = About::where('id','=',1)->first();
        $validated = request()->validate([
            'about' => 'required|min:2'
        ]);
        if($about === null){
            About::create($validated);
            return redirect()->route('dashboard');
        }
        else{
            $about->update($validated);
            return redirect()->route('dashboard');
        }




    }

    public function show(){
        $about = About::where('id','=',1)->first();
        if($about === null){
            $about = 'Empty';
            return view('dashboard',[
                'about' => $about,
            ]);
        }
        else{
            $about = $about->about;
            return view('dashboard',[
            'about' => $about,
        ]);
        }

    }


}
