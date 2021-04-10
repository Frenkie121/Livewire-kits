<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;

    public $per_page = 10;

    public $search = '';

    public $show_count = false;

    public function updatingSearch()
    {
        $this->resetPage();
        $this->show_count = true;
    }

    public function render()
    {
        $to_search = '%' . $this->search . '%';
        return view('livewire.students',[
            'students' => ($this->search) ? 
                                            Student::where('name', 'like', $to_search)
                                            ->orWhere('email', 'like', $to_search)
                                            ->paginate($this->per_page) 
                                            : 
                                            Student::paginate($this->per_page),
        ]);
    }
}
