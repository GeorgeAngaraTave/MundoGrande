@extends('layouts.principalfrom')

@section('content')
{!! Form::open(array('route' => 'cubo.store','method' => 'POST')) !!}
<!--<form role="form" route="matriz.store" method="POST">-->
<div class="form-group">
	{!!Form::select('selectop', 
					array('' => 'Seleccione', 'Set' => 'Set/update', 'Query' => 'Query'),
					null, 
					['class' => 'form-control', 'style'  =>'width: 130px', 'id' => 'dropdown']
					)!!}
</div>
  <div class="form-group">
 {!!Form::label('Set/update:')!!}
 <br>
 	{!!Form::text('set1', null,['id' => 'set1', 'placeholder' => 'x', 'style' => 'width: 130px'])!!}
 	{!!Form::text('set2', null,['id' => 'set2', 'placeholder' => 'y', 'style' => 'width: 130px'])!!}
 	{!!Form::text('set3', null,['id' => 'set3', 'placeholder' => 'z', 'style' => 'width: 130px'])!!}
 	{!!Form::text('set4', null,['id' => 'set4', 'placeholder' => 'w', 'style' => 'width: 130px'])!!}
  </div>

 {!!Form::submit('Calcular',['class' => 'btn btn-default'])!!}
 <!-- <button type="submit" class="btn btn-default">Enviar</button> -->

{!! Form::close() !!} 
<!--</form>-->



@stop