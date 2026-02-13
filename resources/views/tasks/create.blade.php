@extends('layouts.app')

@section('title', 'Nova Tarefa')

@section('content')
    <h2 class="mb-6 text-xl font-bold">Nova Tarefa</h2>

    <form action="{{ route('tasks.store') }}" method="POST" class="max-w-md p-6 bg-white rounded">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 text-sm font-medium">Título</label>
            <input type="text" name="title" required class="w-full p-2 border rounded"
                placeholder="Digite aqui uma tarefa.">

        </div>
        <button class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Salvar</button>

    </form>
@endsection
