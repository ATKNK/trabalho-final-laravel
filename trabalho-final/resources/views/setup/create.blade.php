<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creating a setup: </h1>
    <form action="{{ route('setups.store') }}" method="POST">
        @csrf
        <label for="playerId">Player:</label>
        <select name="playerId" id="playerId">
            @foreach ($players as $player)
                <option value="{{ $player->id }}">{{ $player->name }}</option>
            @endforeach
        </select>

        <label for="weaponId">Weapon:</label>
        <select name="weaponId" id="weaponId">
            @foreach ($weapons as $weapon)
                <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
            @endforeach
        </select>

        <label for="armorId">Armor:</label>
        <select name="armorId" id="armorId">
            @foreach ($armors as $armor)
                <option value="{{ $armor->id }}">{{ $armor->name }}</option>
            @endforeach
        </select>

        <label for="accessoriesId">Accessory:</label>
        <select name="accessoriesId" id="accessoriesId">
            @foreach ($accessories as $accessory)
                <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Setup</button>
    </form>
</body>
</html>