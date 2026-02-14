<div class="flex items-center justify-between p-6 mb-4 bg-white rounded">
    <div>
        <h3 class="{{ $task->completed ? 'opacity-70 line-through' : '' }} text-lg font-semibold">{{ $task->title }}
        </h3>
        <p class="text-sm text-gray-500">Status:
            <span
                class="{{ $task->completed ? 'text-green-600' : 'text-red-600' }}">{{ $task->completed ? 'Concluido' : 'Pendente' }}</span>
        </p>
    </div>
    <div class="flex items-center gap-2">
        <div class="text-xl">
            {{ $task->completed ? '✅' : '❌' }}
        </div>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
            onsubmit="return confirm('Tem certeza que deseja excluir essa tarefa?')">
            @csrf
            @method('DELETE')

            <button type="submit" class="px-3 py-1 text-white bg-red-500 rounded hover:bg-red-600">Deletar</button>
        </form>

        <form action="{{ route('tasks.toggle', $task) }}" method="POST">
            @csrf
            @method('PATCH')

            <button
                class="px-3 py-1 rounded text-sm
        {{ $task->completed ? 'bg-yellow-500 text-white' : 'bg-green-600 text-white' }}">
                {{ $task->completed ? 'Marcar como pendente' : 'Concluir' }}
            </button>
        </form>

    </div>

</div>
