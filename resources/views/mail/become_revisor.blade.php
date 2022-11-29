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
        <h1>{{$user->name}} {{__('ui.requestToCollaborate')}}</h1>
        <ol>
            <li>{{__('ui.name')}}: {{$user->name}}</li>
            <li>{{__('ui.email')}}: {{$user->email}}</li>
            <a href="{{route('make.revisor', compact('user'))}}">{{__('ui.makeAuditor')}}</a>
        </ol>
    </div>    
</body>
</html>

