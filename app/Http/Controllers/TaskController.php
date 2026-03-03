<?php

namespace App\Http\Controllers;

use App\Enums\TaskStatus;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()
            ->tasks()
            ->latest()
            ->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
        ]);

        Task::create([
            'title' => $request->title,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarefa criada com sucesso!');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function toggle(Task $task)
    {
        $task->update([
            'status' => $task->status === TaskStatus::Pending
                ? TaskStatus::Completed
                : TaskStatus::Pending
        ]);

        return back()->with('success', 'Status atualizado!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarefa deletada com sucesso!');
    }
}
