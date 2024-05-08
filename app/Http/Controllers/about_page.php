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
        $about->update($validated);
        return redirect()->route('dashboard');


    }

    public function show(){
        $about = About::where('id','=',1)->first();
        $about = $about->about;
        return view('dashboard',[
            'about' => $about,
        ]);
    }


}
