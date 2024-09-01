<?php

namespace App\Http\Livewire\KsrGames24\Portal;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.ksr-games24.portal.index')->extends('layouts.master-without-nav');
    }
}
