<?php

namespace App\Livewire;

use App\Livewire\Forms\address;
use App\Models\About;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Livewire\Component;

class DeptAbout extends Component
{

    #[Rule('required|min:2')]
    public $about;

    public address $address;

    public function render()
    {
        $dbabout = About::where('id','=',1)->first();
        $dbaddress = About::where('id','=',1)->first();
        if($dbabout === null){
            $dbabout = "No data availale";

            return view('livewire.dept-about',[
                'dbabout' => $dbabout,
                'dbaddress' => $dbaddress,
            ]);
        }
        else{

            $dbabout = $dbabout->about;
            $this->about = $dbabout;

            return view('livewire.dept-about',[
            'dbabout' => $this->about,
            'dbaddress' => $dbaddress,
        ]);
        }

    }

    public function editabout(){ //save
        $validated = $this->validateOnly('about');//aboutdept

        $about = About::where('id','=',1)->first();

        if($about === null){

            About::create($this->only(['about']));
            session()->flash('success', 'About successfully updated.');
            $this->dispatch('flashMessage');
        }
        else{

            $about->update($this->only(['about']));
            session()->flash('success', 'About successfully updated.');
            $this->dispatch('flashMessage');

        }
    }

    public function editaddress(Request $request){
        $validate= request()->validate([
            'deptname' => 'required|min:4',
            'street' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|max:6',
            'district'=>'required',
            'lat' => 'nullable',
            'lng' => 'nullable',
        ]);



        // $validated = $this->address->validate();//aboutdept

        $about = About::where('id','=',1)->first();

        if($about === null){

            About::create($validate);
            return redirect()->route('showeditabout')->with('success','Address is updated successfully');
            // session()->flash('success', 'Address successfully updated.');
            // $this->dispatch('flashMessage');
        }
        else{
            $about->update($validate);
            return redirect()->route('showeditabout')->with('success','Address is updated successfully');


        }
    }


    public function show(){     //this renders dashboard to page
        return view('navigationtab.dashboard');
    }

    public function showeditabout(){     //this renders dashboard to page
        $dbaddress = About::where('id','=',1)->first();

        return view('navigationtab.dashboardaddress.editaddress',[
            'dbaddress' => $dbaddress
        ]);
    }



}
