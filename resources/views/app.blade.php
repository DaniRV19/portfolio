<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Portfolio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script defer src="https://unpkg.com/scrollreveal"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-900">

    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-green-600">Mi Portfolio</h1>
            <nav class="space-x-4">
                <a href="/" class="hover:text-green-500">Inicio</a>
                <a href="/about" class="hover:text-green-500">Sobre mí</a>
                <a href="/tools" class="hover:text-green-500">Herramientas</a>
                <a href="/contact" class="hover:text-green-500">Contacto</a>
            </nav>
        </div>
    </header>
    
    
    <main class="flex-grow">
        @yield('content')
    </main>

    
    <footer class="bg-gray-800 text-gray-200">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold text-green-400 mb-2">DanielRodriguez.dev</h3>
                <p class="text-sm">Desarrollador web apasionado por crear experiencias digitales únicas. ¿Hablamos?</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Enlaces</h4>
                <ul class="space-y-1 text-sm">
                    <li><a href="/" class="hover:text-green-400 transition">Inicio</a></li>
                    <li><a href="/about" class="hover:text-green-400 transition">Sobre mí</a></li>
                    <li><a href="/tools" class="hover:text-green-400 transition">Herramientas</a></li>
                    <li><a href="/contact" class="hover:text-green-400 transition">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-2">Redes</h4>
                <div class="flex space-x-4">
                    <!-- GitHub -->
                    <a href="https://github.com/DaniRV19" target="_blank" class="hover:text-green-400 transition">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.09 3.29 9.4 7.85 10.94.57.1.78-.25.78-.55v-2.1c-3.2.69-3.88-1.54-3.88-1.54-.52-1.33-1.27-1.69-1.27-1.69-1.04-.71.08-.7.08-.7 1.16.08 1.78 1.19 1.78 1.19 1.02 1.75 2.67 1.24 3.32.94.1-.74.4-1.24.73-1.53-2.56-.29-5.26-1.28-5.26-5.7 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.47.11-3.07 0 0 .97-.31 3.2 1.18a11.1 11.1 0 0 1 5.83 0c2.23-1.49 3.2-1.18 3.2-1.18.63 1.6.23 2.78.11 3.07.74.81 1.19 1.84 1.19 3.1 0 4.43-2.7 5.41-5.28 5.7.41.35.78 1.05.78 2.13v3.16c0 .3.2.66.79.55A10.5 10.5 0 0 0 23.5 12C23.5 5.73 18.27.5 12 .5Z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/daniel-rodríguez-vázquez1" target="_blank" class="hover:text-green-400 transition">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M20.45 20.45h-3.55v-5.4c0-1.29-.02-2.94-1.79-2.94-1.8 0-2.07 1.4-2.07 2.84v5.5H9.49V9h3.41v1.56h.05c.47-.89 1.61-1.83 3.31-1.83 3.54 0 4.2 2.33 4.2 5.37v6.35zM5.34 7.43a2.06 2.06 0 1 1 0-4.11 2.06 2.06 0 0 1 0 4.11zM6.97 20.45H3.7V9h3.27v11.45zM22.22 0H1.78C.8 0 0 .78 0 1.75v20.5C0 23.22.8 24 1.78 24h20.44c.98 0 1.78-.78 1.78-1.75V1.75C24 .78 23.2 0 22.22 0z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/danii19rv_" target="_blank" class="hover:text-green-400 transition">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm8.88 2a.88.88 0 1 0 0 1.76.88.88 0 0 0 0-1.76ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 1.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 py-4 border-t border-gray-700">
            &copy; {{ date('Y') }} DanielRodriguez.dev — Todos los derechos reservados
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            distance: '50px',
            duration: 1200,
            easing: 'ease-out',
            origin: 'bottom',
            reset: false
        });

        ScrollReveal().reveal('#sobremi h2', { delay: 100 });
        ScrollReveal().reveal('#sobremi p', { delay: 300 });
        ScrollReveal().reveal('#sobremi img', { delay: 300, origin: 'left' });
        ScrollReveal().reveal('#sobremi .bg-[#8bc34a]', { delay: 400, interval: 100 });
        ScrollReveal().reveal('#sobremi .relative.border-l-4 > div', { delay: 500, interval: 200 });
        ScrollReveal().reveal('#sobremi .grid.grid-cols-1.md\\:grid-cols-3 > div', { delay: 600, interval: 150 });
        ScrollReveal().reveal('#sobremi .text-4xl > i', { delay: 700, interval: 100, origin: 'top' });
        ScrollReveal().reveal('#habilidades h2', { delay: 100 });
        ScrollReveal().reveal('#habilidades h3', { delay: 200 });
        ScrollReveal().reveal('#habilidades .grid > div', { delay: 300, interval: 75 });
    </script>


</body>
</html>

