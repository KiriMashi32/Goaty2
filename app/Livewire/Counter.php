<?php

namespace App\Livewire;

use App\Models\Goat;
use Livewire\Component;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $username = "";
    public string $name = "";
    public string $price = "";
    public int $count = 0;
    public Collection $goats;
    
    public function mount()
    {
        $this->username = 'John Doe';
        $this->count = 0;
        $this->goats = Goat::all();
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
        $g->birthday = "21-07-2004";
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
