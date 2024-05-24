<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class minister extends Form
{
    #[Rule('required|min:3')]
    public $name;
    #[Rule('required|min:3')]
    public $postname;
    #[Rule('required|min:3')]
    public $email;
    #[Rule('required|min:10')]
    public $phone;
    #[Rule('required|min:3')]
    public $twitter;
    #[Rule('required|image|max:1024')]
    public $profile_image;
}
