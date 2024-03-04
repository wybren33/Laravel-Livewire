<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class SearchUsers extends Component
{
    use WithPagination;

    public $search = '';

    public function Search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.search-users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->paginate(30),
        ]);
    }
}
