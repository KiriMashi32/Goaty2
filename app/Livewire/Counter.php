<?php

namespace App\Livewire;

use App\Models\Goat;
use Livewire\Component;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $username = "";
    public string $name = "";
    public int $price;
    public int $count = 0;
    public Collection $goats;
    
    public function mount()
    {
        $this->username = 'John Doe';
        $this->count = 0;
        $this->goats = Goat::all();
        $this->price = 0;
        $this->name = "titi";
    }
    
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function add()
    {
        $g = new Goat();
        $g->name = $this->name;
        $g->price = $this->price;
        $g->color = "darkorange";
        $g->birthday = "2004-07-21";
        $g->sex = 0;
        $g->user_id = 1;
        $g->save();
        $this->goats = Goat::all()->sortByDesc('id');
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
