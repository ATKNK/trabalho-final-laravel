<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Armors:</h1>
        <a href="{{ route('armors.create') }}">Create</a>

    @foreach ($armors as $armor)
        <div>
            <h1>{{ $armor->name }}</h1>
            <ul>
                <li>Name: {{ $armor->name }}</li>
                <li>Set Bonus: {{ $armor->setBonus }} {{ $armor->setBonusModifier }}</li>
                <li>Defense: {{ $armor->defense }}</li>
                <li>Class: {{ $armor->playerClass->name }}</li>
            </ul>
            <a href="{{ route('armors.edit', $armor->id) }}">Edit</a>
            <form action="{{ route('armors.destroy', $armor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        </div>
    @endforeach
</body>

</html>
