<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <select name="{{$name}}" id="{{$name}}" {{empty($required) ? '' : 'required'}}>
        <option value="" disabled selected>Selecione a categoria</option>
        {{$slot}}
    </select>
</div>