<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class address extends Form
{
    #[Rule('required|min:2')]
    public $deptname;
    #[Rule('required|min:2')]
    public $street;
    #[Rule('required|min:2')]
    public $city;
    #[Rule('required|min:2')]
    public $state;
    #[Rule('required|min:2')]
    public $district;
    #[Rule('required|min:6')]
    public $pincode;
    #[Rule('nullable')]
    public $lat;
    #[Rule('nullable')]
    public $lng;
}
