<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Setups:</h1>
    <a href="{{  route('setups.create') }}">Create</a>
    @foreach ($setups as $setup)
        <div>
            <h2>{{ $setup->name }}</h2>
            <p>Player: {{ $setup->player->name }}</p>
            <p>Weapon: {{ $setup->weapon->name }}</p>
            <p>Armor: {{ $setup->armor->name }}</p>
            <p>Accessory: {{ $setup->accessory->name }}</p>
            <p>Class: {{ $setup->player->PlayerClass->name }}</p>
        </div>
    @endforeach
</body>
</html>