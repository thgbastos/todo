<x-layout pageTitle="Todo Criar Tarefa">
    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /
            @endslot
            Voltar
        @endcomponent
    </x-slot:btn_nav>

    <section id="task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input type="text" name="title" label="Título da Tarefa" placeholder="Digite aqui o título da tarefa" required="required" />
            <x-form.text_input type="datetime-local" name="due_date" label="Data da Realização" required="required" />
            <x-form.select_input name="category_id" label="Categoria">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                 @endforeach
            </x-form.select_input>
            <x-form.textarea name="description" label="Descrição" placeholder="Digite uma descrição para esta tarefa" />
            <input type="hidden" value="1" name="user_id"/>
            <div class="inputArea">
                <x-form.button type="reset" class="btn">Limpar</x-form.button>
                <x-form.button type="submit" class="btn btn-primary">Criar Tarefa</x-form.button>
            </div>
        </form>
    </section>
    
</x-layout>