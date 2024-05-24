<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('supplier.create') }}">Crear uno</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <th>{{$supplier->id}}</th>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->codigo}}</td>
                    <td>
                        <a href="{{route('supplier.edit',$supplier->id)}}">Editar</a>
                        <a href="{{route('supplier.delete',$supplier->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
