<x-layout pageTitle="Todo Criar Tarefa">
    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /
            @endslot
            Voltar
        @endcomponent
    </x-slot:btn_nav>

    Criar Nova Tarefa
    
</x-layout>