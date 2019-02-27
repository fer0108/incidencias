<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista <span><a href="/entidades/create">Nuevo</a></span></h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Entidad</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
                <tr>
                    <td>{{$item->entidad}}</td>
                    <td>
                        <a href="/entidades/edit/{{$item->id}}">Editar</a>
                        <form action="{{url('entidades', $item->id)}}"  method="POST" role="form" id="delete_form_{{$item->id}}">
                            @csrf()
                            @method('DELETE')
                            <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
