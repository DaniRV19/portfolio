@extends('app')

@section('title', 'Sobre mí')

@section('content')
<section id="sobremi" class="bg-[#f0efee] text-[#35424a] py-24 px-6">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        <!-- Foto con efecto -->
        <div class="relative group">
            <img src="{{ asset('images/foto.jpg') }}" alt="Daniel Rodríguez"
                 class="rounded-2xl w-full max-w-sm mx-auto shadow-xl transform group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-[#8bc34a]/20 rounded-2xl blur-sm scale-105 opacity-0 group-hover:opacity-100 transition duration-500"></div>
        </div>

        <!-- Texto descriptivo -->
        <div>
            <h2 class="text-4xl font-bold mb-4 relative inline-block after:block after:w-24 after:h-1 after:bg-[#8bc34a] after:mt-2">
                Sobre mí
            </h2>
            <p class="text-lg leading-relaxed mb-4 text-[#2C3E50]">
                ¡Hola! Soy <strong>Daniel Rodríguez Vázquez</strong>, desarrollador de aplicaciones web con una fuerte pasión por el deporte y el trabajo en equipo. Me defino como una persona <strong>extrovertida, proactiva, resolutiva</strong> y con capacidad de liderazgo. Siempre busco el mejor rendimiento tanto individual como colectivo.
            </p>
            <p class="italic text-[#30b877] text-md mb-6">"Solucionar problemas es mi zona de confort."</p>

            <div class="flex flex-wrap gap-3">
                <span class="bg-[#8bc34a] text-white px-4 py-2 rounded-full shadow hover:scale-105 transition">Desarrollador Web</span>
                <span class="bg-[#30b877] text-white px-4 py-2 rounded-full shadow hover:scale-105 transition">Líder nato</span>
                <span class="bg-[#545454] text-white px-4 py-2 rounded-full shadow hover:scale-105 transition">Amante del deporte</span>
                <span class="bg-[#2C3E50] text-white px-4 py-2 rounded-full shadow hover:scale-105 transition">Resolutivo</span>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="mt-20">
        <h3 class="text-3xl font-semibold mb-10 text-center">Formación y Experiencia</h3>
        <div class="relative border-l-4 border-[#8bc34a] ml-4 space-y-10">

            <div class="ml-6">
                <h4 class="text-xl font-bold">Grado Superior en Desarrollo de Aplicaciones Web</h4>
                <span class="text-sm text-gray-500">Ilerna Sevilla · 2023 - 2025</span>
                <p class="text-gray-700 mt-2">Formación técnica especializada en Laravel, Vue, MySQL, PHP, y JavaScript.</p>
            </div>

            <div class="ml-6">
                <h4 class="text-xl font-bold">Cofundador de OC Modus</h4>
                <span class="text-sm text-gray-500">2024 - Actualidad</span>
                <p class="text-gray-700 mt-2">Empresa de productos veganos donde desarrollo estrategias digitales y branding.</p>
            </div>
        </div>
    </div>

    <!-- Soft Skills -->
    <section id="softskills" class="py-20 text-center">
    <div class="mt-20">
        <h3 class="text-3xl font-semibold mb-10 text-center">Habilidades Blandas</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ([
                ['🔥', 'Pasión por aprender'],
                ['🤝', 'Trabajo en equipo'],
                ['🚀', 'Proactividad'],
                ['🎯', 'Enfoque a objetivos'],
                ['🧠', 'Pensamiento analítico'],
                ['📢', 'Buena comunicación'],
            ] as [$icon, $text])
                <div class="bg-white rounded-xl p-6 shadow hover:shadow-lg transition transform hover:-translate-y-1 text-center">
                    <div class="text-4xl mb-2">{{ $icon }}</div>
                    <p class="text-gray-700 font-medium">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
    </section>

    <section id="cv" class="py-20 bg-white text-center">
        <h2 class="text-3xl font-bold mb-8">¿Quieres conocerme más?</h2>
        <p class="text-lg mb-8 text-gray-700">Descarga mi currículum actualizado y descubre más sobre mi experiencia.</p>

        <a href="{{ asset('documents/CV_Daniel_Rodriguez.pdf') }}" download
        class="inline-block px-8 py-4 text-white font-semibold bg-[#8bc34a] rounded-full shadow-lg hover:shadow-xl hover:bg-[#76a73f] transition duration-300 transform hover:-translate-y-1 hover:scale-105">
            <i class="fas fa-download mr-2"></i> Descargar CV
        </a>
    </section>


</section>
@endsection
