<x-layout pageTitle="Todo Editar Tarefa">
    <x-slot:btn_nav>
        @component('components.btn-nav')
            @slot('href')
                /home
            @endslot
            Voltar
        @endcomponent
    </x-slot:btn_nav>
    
    <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" value="{{$editTask->id}}" name="id"/>
            <x-form.text_input type="text" name="title" label="Título da Tarefa" required="required"  value="{{$editTask->title}}" />
            <x-form.text_input type="datetime-local" name="due_date" label="Data da Realização" required="required" value="{{$editTask->due_date}}" />
            <x-form.select_input name="category_id" label="Categoria">
                <option value="{{$editTask->category_id}}" selected>{{$editTask->category_id}} - {{$editTask->category->title}}</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->id}} - {{$category->title}}</option>
                 @endforeach
            </x-form.select_input>
            <x-form.textarea name="description" label="Descrição" value="{{$editTask->description}}" />
            <input type="hidden" value="{{$editTask->user_id}}" name="user_id"/>
            <div class="inputArea">
                <x-form.button type="reset" class="btn">Desfazer</x-form.button>
                <x-form.button type="submit" class="btn btn-primary">Atualizar Tarefa</x-form.button>
            </div>
        </form>
    </section>

</x-layout>