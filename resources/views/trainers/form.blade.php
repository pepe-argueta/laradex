<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
</div>

<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control'])!!}
</div>

<div class="from-group">
    {!! Form::label('avatar','Avatar') !!}
    {!! Form::file('avatar',['class' => 'form-control'])!!}
</div><br>