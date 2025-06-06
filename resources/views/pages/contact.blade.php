@extends('app')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-[#8BC34A] via-white to-[#35424a] py-20 px-6">
    <div class="max-w-2xl mx-auto bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-10 border border-white/50">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">📬 Contáctame</h2>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 font-semibold rounded-lg border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/contact" class="space-y-6">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">Nombre</label>
                <div class="relative">
                    <input type="text" name="name" id="name" placeholder="Tu nombre"
                        class="w-full px-4 py-3 pl-10 bg-white rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#8BC34A] focus:outline-none transition" required>
                    <i class="absolute left-3 top-3.5 text-gray-400 fas fa-user"></i>
                </div>
            </div>

            <!-- Correo -->
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">Correo electrónico</label>
                <div class="relative">
                    <input type="email" name="email" id="email" placeholder="tucorreo@email.com"
                        class="w-full px-4 py-3 pl-10 bg-white rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#8BC34A] focus:outline-none transition" required>
                    <i class="absolute left-3 top-3.5 text-gray-400 fas fa-envelope"></i>
                </div>
            </div>

            <!-- Mensaje -->
            <div>
                <label for="message" class="block text-gray-700 font-semibold mb-1">Mensaje</label>
                <textarea name="message" id="message" rows="5" placeholder="Escribe tu mensaje..."
                    class="w-full px-4 py-3 bg-white rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-[#8BC34A] focus:outline-none transition resize-none" required></textarea>
            </div>

            <!-- Botón -->
            <div class="text-center">
                <button type="submit"
                    class="bg-[#8BC34A] hover:bg-[#6ea737] text-white font-bold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
                    Enviar mensaje
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
