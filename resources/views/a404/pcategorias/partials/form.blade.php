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
    {!! Form::label('patern_id', __('Categoría padre'), []) !!}
    <select name="patern_id" >
        <option value="">{{__('Selecciona')}}</option>
        @foreach ($categorias as $categoria)
        
            @if (isset($pcategoria) && ($categoria->id == $pcategoria->patern_id || $categoria->id == old('patern_id')))
                <option value="{{$categoria->id}}" selected> {{$categoria->nombre}}</option>
            @else
                <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>    
            @endif
        @endforeach
    </select>
</div>