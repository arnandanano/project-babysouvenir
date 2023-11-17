<?php

namespace App\Livewire\Admin\Nota;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.nota.index')
            ->extends('layouts.admin')
            ->section('content');

    }
}
