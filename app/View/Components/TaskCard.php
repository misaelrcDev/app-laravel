<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class TaskCard extends Component
{
    public $task;
    /**
     * Create a new component instance.
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.task-card');
    }
}
