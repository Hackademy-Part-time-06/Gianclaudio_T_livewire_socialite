<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCreateForm extends Component
{
    public $title, $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',

    ];

    

    public function store()
    {
        $this->validate();
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        //Comando globale per richiamare un dato in sessione

        session()->flash('tasks', 'Form Creato');
        $this->reset(['title', 'description']);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    


    public function render()
    {
        return view('livewire.task-create-form');
    }
}
