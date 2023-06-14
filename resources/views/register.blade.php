<x-layout pageTitle="Todo Login">
    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /login
            @endslot
            Já possui conta? Faça login
        @endcomponent
    </x-slot:btn_nav>


    Tela de Registro
</x-layout>