<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    public $search = "";


    // Live Search
    // public function updatedSearch()
    // {
    //     $this->dispatch('search', search: $this->search);
    // }

    public function updateSearch()
    {
        $this->dispatch('search', search: $this->search);
    }


    public function render()
    {
        return view('livewire.search-box');
    }
}
