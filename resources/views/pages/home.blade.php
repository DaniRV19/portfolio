@extends('app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-[#35424a] via-[#2C3E50] to-[#8BC34A] text-white flex items-center justify-center px-6 relative overflow-hidden">

    <!-- Fondo decorativo -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute w-80 h-80 bg-white/10 rounded-full blur-3xl -top-16 -left-20 animate-pulse-slow"></div>
        <div class="absolute w-60 h-60 bg-white/10 rounded-full blur-2xl bottom-10 right-10 animate-pulse-slow delay-200"></div>
    </div>

    <div class="z-10 text-center max-w-3xl animate-fade-in-up">
        <!-- Foto -->
        <img src="{{ asset('images/foto2.jpg') }}" alt="Daniel Rodríguez Vázquez"
             class="w-40 h-40 mx-auto rounded-full border-4 border-white shadow-xl mb-6 hover:scale-110 transition duration-300">

        <!-- Nombre -->
        <h1 class="text-5xl sm:text-6xl font-extrabold mb-4 leading-tight drop-shadow-lg">
            Daniel Rodríguez Vázquez
        </h1>

        <!-- Título -->
        <h2 class="text-2xl sm:text-3xl font-semibold text-white/90 mb-4">
            Desarrollador de Aplicaciones Web 💻
        </h2>

        <!-- Frase motivacional animada -->
        <p class="text-lg sm:text-xl text-white/80 mb-6 font-medium">
            <span id="typed-text" class="font-semibold"></span>
        </p>

        <!-- CTA -->
        <div class="flex justify-center gap-4 mt-4">
            <a href="/about" class="bg-white text-[#35424a] font-semibold py-2 px-6 rounded-full hover:bg-[#8BC34A] hover:text-white transition shadow-lg">
                Saber más sobre mí
            </a>
            <a href="/contact" class="border border-white py-2 px-6 rounded-full hover:bg-white hover:text-[#35424a] transition shadow-lg">
                Contáctame
            </a>
        </div>
    </div>
</section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Typed('#typed-text', {
            strings: [
                "Apasionado por la tecnología y la creatividad.",
                "Con actitud proactiva, resolutiva y positiva.",
                "¿Buscas talento? ¡Aquí tienes a tu desarrollador!"
            ],
            typeSpeed: 45,
            backSpeed: 20,
            loop: true
            });
        });
    </script>


@endsection