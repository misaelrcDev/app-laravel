<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col md:flex-row bg-slate-50 font-sans">
        <div class="md:w-1/2 bg-blue-900 flex flex-col justify-center px-12 py-20 text-white relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600 rounded-full blur-[120px] opacity-30"></div>

            <div class="relative z-10">
                <a href="/" class="mb-10 block">
                    <x-application-logo class="w-20 h-20 fill-current text-blue-400" />
                </a>
                <h1 class="text-5xl font-extrabold tracking-tight mb-6">
                    Sua produtividade <br>
                    <span class="text-blue-400">em outro nível.</span>
                </h1>
                <p class="text-lg text-blue-100 max-w-md leading-relaxed opacity-80">
                    Gerencie suas tarefas diárias com uma interface limpa, rápida e pensada para o seu foco.
                </p>
            </div>
        </div>

        <div class="md:w-1/2 flex items-center justify-center p-8 bg-white dark:bg-slate-900">
            <div class="w-full max-w-md">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
