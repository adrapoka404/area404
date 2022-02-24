<div>
    {!! Form::label('nombre', __('Nombre'), []) !!}
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
    {!! Form::label('cantidad', __('Cantidad'), []) !!}
    {!! Form::number('cantidad', null, []) !!}
</div>

<div>
    {!! Form::label('minimo', __('Mínimo para stock'), []) !!}
    {!! Form::number('minimo', null, []) !!}
</div>
<div>
    {!! Form::label('estatus', __('Estado'), []) !!}
    {!! Form::select('estatus', [__('Desactivado'),  __('Activo')], null, []) !!}
</div>
<div>
    {!! Form::label('imagen', __('Imagén descriptiva'), []) !!}
    {!! Form::file('imagen', []) !!}
</div>
<div>
    {!! Form::label('categoria_id', __('Categoría'), []) !!}
    <select name="categoria_id" >
        <option >{{__('Selecciona')}}</option>
        @foreach ($categorias as $categoria)
            @if (isset($producto) && ($categoria->id == $producto->categoria_id || $producto->id == old('categoria_id')))
                <option value="{{$categoria->id}}" selected> {{$categoria->nombre}}</option>
            @else
                <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>    
            @endif
        @endforeach
    </select>
</div>
<div>
    {!! Form::label('tienda_id', __('Tienda'), []) !!}
    <select name="tienda_id" >
        <option >{{__('Selecciona')}}</option>
        @foreach ($tiendas as $tienda)
            @if (isset($producto) && ($tienda->id == $producto->tienda_id || $producto->id == old('tienda_id')))
                <option value="{{$tienda->id}}" selected> {{$tienda->nombre}}</option>
            @else
                <option value="{{$tienda->id}}"> {{$tienda->nombre}}</option>    
            @endif
        @endforeach
    </select>
</div>
<div>
    {!! Form::label('patern_id', __('Producto general'), []) !!}
    <select name="patern_id" >
        <option value="0" >{{__('Selecciona')}}</option>
        @foreach ($productos as $p)
            @if (isset($producto) && ($p->id == $p->patern_id || $producto->id == old('patern_id')))
                <option value="{{$p->id}}" selected> {{$p->nombre}}</option>
            @else
                <option value="{{$p->id}}"> {{$p->nombre}}</option>    
            @endif
        @endforeach
    </select>
</div>
