<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <form action="{{ route('checkenergy')}}" method="post">
            @csrf
            <label for="energy">Digite o valor de energia:</label>
            <input type="number" name="energy" id="energy">
            <button type="submit">Enviar</button>
        </form>
        
        @if (isset($energy))
            <p>{{ $energy }}</p>
        @endif
    </h1>
</body>
</html>