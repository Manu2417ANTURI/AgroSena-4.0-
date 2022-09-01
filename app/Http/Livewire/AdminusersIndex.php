<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminusersIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {  
        $users= User::where('name', 'LIKE', '%'. $this->search .'%')
        ->orWhere('email', 'LIKE', '%'. $this->search .'%')->orWhere('id', 'LIKE', '%'. $this->search .'%')->paginate();
        return view('livewire.adminusers-index', compact('users'));
    }
}
