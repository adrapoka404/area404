<div>
    {!! Form::label('nombre', __('Nombre descriptivo'), []) !!}
    {!! Form::text('nombre', null, []) !!}
</div>
<div>
    {!! Form::label('descripcion', __('Descripción'), []) !!}
    {!! Form::textarea('descripcion', null, []) !!}
</div>
<div>
    {!! Form::label('precio', __('Precio'), []) !!}
    {!! Form::text('precio', null, []) !!}
</div>
<div>
    {!! Form::label('categoria_id', __('Categoría'), []) !!}
    <select name="categoria_id" >
        <option >{{__('Selecciona')}}</option>
        @foreach ($gcategorias as $gcategoria)
            @if (isset($gasto) && $gasto->categoria_id == $gcategoria->id)
                <option value="{{$gcategoria->id}}" selected>{{$gcategoria->nombre}} </option>
            @else 
                <option value="{{$gcategoria->id}}">{{$gcategoria->nombre}} </option>
            @endif
        @endforeach
    </select>
</div>
<div>
    {!! Form::label('recurrente', __('Gasto recurrente'), []) !!}
    @if (isset($gasto) && $gasto->recurrente == 1)
    {!! Form::checkbox('recurrente', "1", true, []) !!}    
    @else
    {!! Form::checkbox('recurrente', "1", null, []) !!}
    @endif
</div>
