
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{route('roles.store')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar un Rol</legend>

        @include('roles.fields')

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
