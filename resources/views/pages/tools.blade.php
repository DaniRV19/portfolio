@extends('app')

@section('content')
<section id="habilidades" class="bg-[#f0efee] py-24 px-6 text-[#35424a]" x-data="{showModal: false, modalTitle: '', modalDesc: '', openModal(title, desc) {this.modalTitle = title; this.modalDesc = desc; this.showModal = true;}}">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-16">🚀 Mis habilidades técnicas</h2>

        {{-- LENGUAJES --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold mb-8 text-[#30b877]">🧩 Lenguajes</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @foreach ([
                    ['name' => 'HTML', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg', 'desc' => 'Lenguaje de marcado utilizado para estructurar páginas web.'],
                    ['name' => 'CSS', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg', 'desc' => 'Lenguaje de estilo que da diseño a las páginas web.'],
                    ['name' => 'JavaScript', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'desc' => 'Lenguaje de programación que añade interactividad a las webs.'],
                    ['name' => 'PHP', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'desc' => 'Lenguaje de backend ampliamente usado en desarrollo web.'],
                    ['name' => 'SQL', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'desc' => 'Lenguaje para gestionar bases de datos.'],
                    ['name' => 'COBOL', 'icon' => 'https://cdn.goconqr.com/uploads/slide_property/image/611324/desktop_ea5b95f6-8283-4618-8a97-26066b893687.jpg', 'desc' => 'Lenguaje clásico usado en banca y grandes sistemas legacy.'],
                    ['name' => 'Java', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg', 'desc' => 'Lenguaje multiplataforma muy utilizado en empresas.'],
                    ['name' => 'JSON', 'icon' => 'https://img.icons8.com/color/48/json--v1.png', 'desc' => 'Formato ligero para intercambio de datos.']
                ] as $lang)
                    <div 
                        class="bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 text-center group cursor-pointer"
                        @click="modalTitle = '{{ $lang['name'] }}'; modalDesc = '{{ $lang['desc'] }}'; showModal = true"
                    >
                        <img src="{{ $lang['icon'] }}" alt="{{ $lang['name'] }}" class="h-12 mx-auto mb-3 group-hover:scale-110 transition" />
                        <p class="text-md font-semibold">{{ $lang['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- HERRAMIENTAS --}}
        <div>
            <h3 class="text-2xl font-semibold mb-8 text-[#30b877]">🛠️ Herramientas</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @foreach ([
                    ['name' => 'Bootstrap', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg', 'desc' => 'Framework CSS para desarrollar sitios web responsive.'],
                    ['name' => 'Tailwind', 'icon' => 'https://cdnblog.webkul.com/blog/wp-content/uploads/2024/05/tailwindcss-1633184775.webp', 'desc' => 'Framework CSS utility-first moderno.'],
                    ['name' => 'VirtualBox', 'icon' => 'https://img.icons8.com/color/48/virtualbox.png', 'desc' => 'Herramienta de virtualización de sistemas operativos.'],
                    ['name' => 'Docker', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg', 'desc' => 'Plataforma para contenedores que facilita el despliegue.'],
                    ['name' => 'MySQL', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'desc' => 'Sistema de gestión de bases de datos relacionales.'],
                    ['name' => 'Alpine', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/alpinejs/alpinejs-original.svg', 'desc' => 'Framework ligero para interactividad con JavaScript.'],
                    ['name' => 'Node', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'desc' => 'Entorno para ejecutar JS en el servidor.'],
                    ['name' => 'Git', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg', 'desc' => 'Sistema de control de versiones distribuido.'],
                    ['name' => 'GitHub', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg', 'desc' => 'Plataforma para alojar y colaborar en código.'],
                    ['name' => 'Figma', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg', 'desc' => 'Herramienta de diseño colaborativo para UI.'],
                    ['name' => 'Laravel', 'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png', 'desc' => 'Framework PHP elegante y potente.'],
                ] as $tool)
                    <div 
                        class="bg-white p-5 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-300 text-center group cursor-pointer"
                        @click="modalTitle = '{{ $tool['name'] }}'; modalDesc = '{{ $tool['desc'] }}'; showModal = true"
                    >
                        <img src="{{ $tool['icon'] }}" alt="{{ $tool['name'] }}" class="h-12 mx-auto mb-3 group-hover:scale-110 transition" />
                        <p class="text-md font-semibold">{{ $tool['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal Mejorado -->
    <!-- Modal Mejorado -->
<div 
    x-show="showModal"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-40 backdrop-blur-sm flex items-center justify-center z-50"
    style="display: none;"
>
    <div 
        x-show="showModal"
        x-transition:enter="transition-transform ease-out duration-300"
        x-transition:enter-start="scale-90"
        x-transition:enter-end="scale-100"
        x-transition:leave="transition-transform ease-in duration-300"
        x-transition:leave-start="scale-100"
        x-transition:leave-end="scale-90"
        @click.away="showModal = false"
        class="bg-white p-8 rounded-2xl max-w-md w-full text-center shadow-2xl relative border-t-8 border-[#30b877]"
    >
        <!-- Botón cerrar -->
        <button 
            @click="showModal = false"
            class="absolute top-4 right-4 text-gray-400 hover:text-green-400 transition transform hover:scale-125 text-2xl font-bold"
            aria-label="Cerrar"
        >
            &times;
        </button>

        <!-- Título -->
        <h3 class="text-2xl font-bold mb-4 text-[#30b877]" x-text="modalTitle"></h3>

        <!-- Descripción -->
        <p class="text-gray-700 text-lg leading-relaxed" x-text="modalDesc"></p>
    </div>
</div>
</section>

@endsection