@extends('layouts.app')

@section('title', 'Minhas Tarefas')

@section('content')
    <h2 class="mb-6 text-xl font-bold">Seja Bem-vindo {{ auth()->user()->name }}!</h2>
    <p class="mb-6 text-xl font-semibold">Minhas Tarefas:</p>

    @forelse ($tasks as $task)
        <x-task-card :task="$task" />
    @empty
        <x-empty-state />
    @endforelse
@endsection
