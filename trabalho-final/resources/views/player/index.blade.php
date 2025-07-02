<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Players: </h1>
    <a href="{{ route('players.create') }}">Create</a>
    @foreach($players as $player)
        <div>
            <h1>{{ $player->name }}</h1>
            <ul>
                <li>Health: {{ $player->health }}</li>
                <li>Mana: {{ $player->mana }}</li>
                <li>Class: {{ $player->playerClass->name }}</li>
            </ul>
            <a href="{{ route('players.edit', $player->id) }}">Edit</a>
            <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>

</html>