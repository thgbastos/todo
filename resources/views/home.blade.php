<x-layout>

    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /task/new
            @endslot
            Criar Tarefa
        @endcomponent
    </x-slot:btn_nav>

    <section class="graph">
        <div class="graph_header">
            <h3>Progresso do Dia</h3>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png">
                    07 de Jun
                <img src="/assets/images/icon-next.png">
            </div>
        </div>
        <div class="graph_header-subtitle">Tarefas: <b>3/6</b></div>
        <div class="graph-placeholder"></div>
        <div class="task_left_footer">
            <img src="/assets/images/icon-info.png">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>

    <section class="list"> 
        <div class="list_header">
            <select class="list_header-select" name="tarefas" id="tarefas">Tarefas
                <option value="vlr1">Todas as Tarefas</option>
                <option value="vlr2">Minha tarefa 2</option>
                <option value="vlr3">Minha tarefa 3</option>
            </select>
        </div>


        @php
            $tasks = [
                ['id_task'  => 1,
                'done'      => true,
                'title'     => 'Minha primeira tarefa',
                'category'  => 'Categoria 1',
                ],
            ]
        @endphp

        <div class="task_list">
            <x-task :data=$tasks[0] />

        </div>

    </section>

</x-layout>