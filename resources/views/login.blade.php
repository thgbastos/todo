<x-layout pageTitle="Todo Login">
    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /register
            @endslot
            Registre-se
        @endcomponent
    </x-slot:btn_nav>

    Tela de Login
    <a href="{{route('home')}}">
        Ir para Home
    </a>
</x-layout>