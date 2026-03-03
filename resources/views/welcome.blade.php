<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Tarefas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen flex flex-col md:flex-row bg-slate-50">

        <!-- Lado esquerdo -->
        <div class="md:w-1/2 bg-blue-900 flex flex-col justify-center px-12 py-20 text-white relative overflow-hidden">

            <!-- Efeito decorativo -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600 rounded-full blur-[120px] opacity-30"></div>

            <div class="relative z-10">
                <h1 class="text-5xl font-extrabold tracking-tight mb-6 leading-tight">
                    Organize sua vida <br>
                    <span class="text-blue-400">com simplicidade.</span>
                </h1>

                <p class="text-lg text-blue-100 max-w-md leading-relaxed opacity-80 mb-8">
                    Um aplicativo moderno para gerenciar suas tarefas,
                    aumentar sua produtividade e manter o foco no que realmente importa.
                </p>

                <div class="flex gap-4">
                    <a href="{{ route('login') }}"
                        class="bg-blue-500 hover:bg-blue-400 transition duration-300 px-6 py-3 rounded-lg font-semibold shadow-lg">
                        Entrar
                    </a>

                    <a href="{{ route('register') }}"
                        class="bg-white/10 backdrop-blur border border-white/20 hover:bg-white/20 transition duration-300 px-6 py-3 rounded-lg font-semibold">
                        Criar Conta
                    </a>
                </div>
            </div>
        </div>

        <!-- Lado direito -->
        <div class="md:w-1/2 flex items-center justify-center p-8 bg-white dark:bg-slate-900">
            <div class="text-center max-w-md">
                <div class="bg-slate-100 dark:bg-slate-800 p-8 rounded-2xl shadow-xl">
                    <h2 class="text-2xl font-bold mb-4 text-slate-800 dark:text-white">
                        Simples. Rápido. Eficiente.
                    </h2>

                    <ul class="text-slate-600 dark:text-slate-300 space-y-3 text-left">
                        <li>✔️ Crie tarefas rapidamente</li>
                        <li>✔️ Marque como concluídas</li>
                        <li>✔️ Organize por prioridade</li>
                        <li>✔️ Acesse de qualquer lugar</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
