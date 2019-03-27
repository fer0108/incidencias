
@extends('layouts.estilos')

@section('content')

<form action="{{url('cargos', $cargo->id)}}" method="POST" role="form">
@csrf()
@method('PATCH')
<div class="card-header">
    <legend>Agregar cargo</legend>
  </div>
    @include('cargos.fields')
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection


