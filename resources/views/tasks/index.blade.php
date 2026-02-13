@extends('layouts.app')

@section('title', 'Minhas Tarefas')

@section('content')
    <h2 class="mb-6 text-xl font-bold">Minhas Tarefas</h2>

    @forelse ($tasks as $task)
        <x-task-card :task="$task" />
    @empty
        <x-empty-state />
    @endforelse
@endsection
