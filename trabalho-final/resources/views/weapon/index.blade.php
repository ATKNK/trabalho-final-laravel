<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Weapons:</h1>
    <a href="{{ route('weapons.create') }}">Create</a>

    @foreach ($weapons as $weapon)
        <div>
            <h1>{{ $weapon->name }}</h1>
            <ul>
                <li>Damage: {{ $weapon->baseDamage }}</li>
                <li>Knockback: {{ $weapon->knockback }}</li>
                <li>Attack Speed: {{ $weapon->attackSpeed }}</li>
                <li>Class: {{ $weapon->playerClass->name }}</li>
            </ul>
            <a href="{{ route('weapons.edit', $weapon->id) }}">Edit</a>
            <form action="{{ route('weapons.destroy', $weapon->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>

</html>
