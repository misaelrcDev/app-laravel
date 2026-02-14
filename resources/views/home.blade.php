@extends('layouts.app')

@section('title', 'Bem-vindo!')

@section('content')
    <h1 class="text-xl font-bold">Seja Bem-vindo!</h1>

    <div>
        @forelse ($tasks as $task)
            <x-task-card :task="$task" />
        @empty
            <x-empty-state />
        @endforelse
    </div>
@endsection
