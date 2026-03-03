<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Meu App</title>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <header class="bg-blue-700 text-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">App To Do List</h1>
            <nav>
                <ul class="flex gap-2">
                    <li>
                        <a href="{{ route('tasks.index') }}" class="hover:underline">Minhas Tarefas</a>
                    </li>
                    <li>
                        <a href="{{ route('tasks.create') }}" class="hover:underline">+ Nova Tarefa</a>
                    </li>
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="hover:underline">
                                    Sair
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition-duration.500ms
            class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-gray-200 py-4 mt-8 text-center">
        <p class="text-sm text-gray-600">&copy; {{ date('Y') }} Meu App. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
