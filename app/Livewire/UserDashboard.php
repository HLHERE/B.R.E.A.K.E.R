<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserDashboard extends Component
{
    use WithPagination;

    public $search = '';
    public function render()
    {
        return view('livewire.user-dashboard', [
            
            'users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(7),
        ]);
    }
    public function searchSearch()
    {
        $this->resetPage();
        $this->dispatchBrowserEvent('refreshLivewire');
    }

    public function updateSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['refreshLivewire' => '$refresh'];

    // Other methods...
}
