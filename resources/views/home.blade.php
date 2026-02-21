@extends('layouts.app')

@section('title', 'Bem-vindo!')

@section('content')
    <h2 class="mb-6 text-xl font-bold">Seja Bem vindo Misael</h2>



    @forelse ($tasks as $task)
        <x-task-card :task="$task" />
    @empty
        <x-empty-state />
    @endforelse

@endsection
