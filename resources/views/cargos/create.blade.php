
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{url('cargos/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar un cargo</legend>

        @include('cargos.fields')

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
