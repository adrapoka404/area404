<div>
    {!! Form::label('nombre', __('Nombre'), []) !!}
    {!! Form::text('nombre', null, []) !!}
</div>
<div>
    {!! Form::label('estatus', __('Estado'), []) !!}
    {!! Form::select('estatus', [__('Desactivado'),  __('Activo')], null, []) !!}
</div>