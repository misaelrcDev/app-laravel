<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Meu App</title>
</head>

<body class="font-sans text-gray-800 bg-gray-100">
    <header class="text-white bg-blue-600 shadow">
        <div class="container flex items-center justify-between px-4 py-4 mx-auto">
            <h1 class="text-xl font-bold"><a href="{{ route('home') }}">App Listas de Tarefas</a></h1>
            <nav>
                <ul class="flex gap-2">
                    <li>
                        <a href="{{ route('tasks.index') }}" class="hover:underline">Minhas Tarefas</a>
                    </li>
                    <li>
                        <a href="{{ route('tasks.create') }}" class="hover:underline">+ Nova Tarefa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
            class="p-3 mb-4 bg-green-100 rounded trext-green-700">
            {{ session('success') }}
        </div>
    @endif

    <main class="container px-4 py-6 mx-auto">
        @yield('content')
    </main>

    <footer class="py-6 mt-8 text-center bg-gray-200">
        <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Meu App. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
