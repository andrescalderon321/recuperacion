<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('supplier.store')}}" method="POST">
        @csrf
        <label>
            Nombre
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Código
            <input type="text" name="codigo">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>