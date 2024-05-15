<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DeptAbout extends Component
{

    #[Rule('required|min:2')]
    public $about;

    public function render()
    {
        $dbabout = About::where('id','=',1)->first();
        if($dbabout === null){
            $dbabout = "Kuch nai hai db me from render function";
            return view('livewire.dept-about',[
                'dbabout' => $dbabout,
            ]);
        }
        else{
            $dbabout = $dbabout->about;
            $this->about = $dbabout;

            return view('livewire.dept-about',[
            'dbabout' => $this->about,
        ]);
        }

    }

    public function editabout(){ //save
        $validated = $this->validate();//aboutdept

        $about = About::where('id','=',1)->first();

        if($about === null){

            About::create($validated);
            session()->flash('success', 'About successfully updated.');
            $this->dispatch('flashMessage');
        }
        else{

            $about->update($validated);
            session()->flash('success', 'About successfully updated.');
            $this->dispatch('flashMessage');

        }
    }


    public function show(){     //this renders dashboard to page
        return view('navigationtab.dashboard');
    }



}
