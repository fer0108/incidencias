
@extends('layouts.estilos')

@section('content')

<div class="col-sm">
<form action="{{url('entidades/lista')}}" method="POST" role="form">
      @csrf()
        <legend>Guardar una entidad</legend>

        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input type="text" class="form-control" id="entidad" name="entidad" placeholder="Escriba la entidad">
        </div>

        @component('componentes.text', ['label' => 'Nombre', 'name' => 'primer_nombre', 'placeholder' => 'Escriba el nombre'])
        @endcomponent

        @component('componentes.select', ['label' => 'Sexo', 'name' => 'sexo_id', 'data' => $sexos, 'tag' => 'sexo'])
        @endcomponent

        @component('componentes.select', ['label' => 'Entidades', 'name' => 'entidad_id', 'data' => $entidades, 'tag' => 'entidad'])
        @endcomponent

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>


@endsection
