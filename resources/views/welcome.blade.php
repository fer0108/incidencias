@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title">Agregar Entidad</h4>
  </div>
  <div class="card-body">
    <form action="/entidades" method="POST" role="form">
        @csrf()
        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input name="entidad" type="text" class="form-control" id="entidad" placeholder="Nombre de la entidad">
        </div>

        <select name="sexo_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($sexos as $item)
            <option value="{{$item->id}}">{{$item->sexo}}</option>
            @endforeach
        </select>

        @component('componentes.select', ['label' => 'Sexo', 'data' => $sexos, 'tag' => 'sexo'])
        @endcomponent

        @component('componentes.text', ['label' => 'Nombres'])
        @endcomponent

        @component('componentes.text', ['label' => 'Apellidos'])
        @endcomponent

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>

@endsection

@section('sidebar')
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>
@endsection

