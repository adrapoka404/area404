<div>
    {!! Form::label('nombre', __('Nombre'), []) !!}
    {!! Form::text('nombre', null, []) !!}
</div>
<div>
    {!! Form::label('descripcion', __('Descripción'), []) !!}
    {!! Form::textarea('descripcion', null, []) !!}
</div>
<div>
    {!! Form::label('estatus', __('Estado'), []) !!}
    {!! Form::select('estatus', [__('Desactivado'),  __('Activo')], null, []) !!}
</div>
<div>
    {!! Form::label('categoria_id', __('Categoría'), []) !!}
    <select name="categoria_id" >
        <option >{{__('Selecciona')}}</option>
        @foreach ($categorias as $categoria)
            @if (isset($tienda) && ($categoria->id == $tienda->categoria_id || $categoria->id == old('categoria_id')))
                <option value="{{$categoria->id}}" selected> {{$categoria->nombre}}</option>
            @else
                <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>    
            @endif
        @endforeach
    </select>
</div>
<div>
    {!! Form::label('user_ud', __('Representante'), []) !!}
    <select name="user_id" >
        <option value="">{{__('Selecciona')}}</option>
        @foreach ($usuarios as $usuario)
        
            @if (isset($tienda) && ($usuario->id == $tienda->user_id || $tienda->id == old('user_id')))
                <option value="{{$usuario->id}}" selected> {{$usuario->name}}</option>
            @else
                <option value="{{$usuario->id}}"> {{$usuario->name}}</option>    
            @endif
        @endforeach
    </select>
</div>