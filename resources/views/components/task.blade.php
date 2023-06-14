<div class="task">
    <div class="title">
        <input type="checkbox" name="task" id="task" 
        @if ($data && $data['done'])
            checked
        @endif
        />
        <div class="task_title">
            <b>{{$data['title'] ?? ''}}</b>
        </div>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        {{$data['category'] ?? ''}}
    </div>
    <div class="actions">
        <a href="/task/edit/{{$data['id_task'] ?? ''}}"><img src="/assets/images/icon-edit.png"></a>
        <a href="{{route('task.delete')}}"><img src="/assets/images/icon-delete.png"></a>
    </div>
</div>