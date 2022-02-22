<?php

namespace App\Http\Livewire;

use App\Models\Navbar as NavbarModel;
use Livewire\Component;

class Navbar extends Component
{

    public function render()
    {
        $data = NavbarModel::all();

        return view('livewire.navbar')
            ->with('data', $data);
    }
}