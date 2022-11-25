<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>l'utente {{$user->name}} ha richiesto di collaborare con noi</h1>
        <ol>
            <li>Nome: {{$user->name}}</li>
            <li>email: {{$user->email}}</li>
            <a href="{{route('make.revisor', compact('user'))}}">rendi revisore</a>
        </ol>
    </div>    
</body>
</html>