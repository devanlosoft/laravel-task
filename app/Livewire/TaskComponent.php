<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Collection;

class TaskComponent extends Component
{
    public $tasks = [];
    public $title;
    public $description;
    public $modal = false;

    public $miTarea = null;

    public $id;

    public function render()
    {
        return view('livewire.task-component');
    }


    public function mount()
    {
        $this->tasks = $this->getTask();
    }

    public function getTask(): Collection
    {
        return Task::where('user_id', auth()->id())->get()->sortByDesc('id');
    }

    private function clearFields()
    {
        $this->title = '';
        $this->description = '';
    }

    public function openCreateModal(Task $task = null)
    {
        if ($task) {
            $this->miTarea = $task;
            $this->title = $task->title;
            $this->description = $task->description;
            $this->id = $task->id;
        } else {
            $this->clearFields();
        }
        $this->modal = true;

    }

    public function closeCreateModal()
    {
        $this->modal = false;
    }

    public function updateOrCreateTask()
    {

        if ($this->miTarea->id) {
            $task = Task::find($this->miTarea->id);
            $task->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
        } else {
            $task = Task::create([
                'title' => $this->title,
                'description' => $this->description,
                'user_id' => auth()->user()->id,
            ]);
        }

        $this->clearFields();
        $this->modal = false;
        $this->tasks = $this->getTask()->sortByDesc('id');

    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        $this->tasks = $this->getTask();
    }
}
