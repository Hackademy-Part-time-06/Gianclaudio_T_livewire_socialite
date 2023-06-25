<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskIndexList extends Component
{

public function destroy(Task $task)
{
    $task->delete(); 
    session()->flash('tasks', 'Task Correttamente eliminato.');
}

    public function render()
    {

        $tasks = Task::all();

        return view('livewire.task-index-list', compact('tasks'));
    }
}
