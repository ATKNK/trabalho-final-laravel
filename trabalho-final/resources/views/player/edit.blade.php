<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editing a player:</h1>
    <form action="{{ route('players.update', $player->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $player->name }}" required>
        </div>
        
        <div>
            <label for="health">Health:</label>
            <input type="number" id="health" name="health" value="{{ $player->health }}" required>
        </div>

        <div>
            <label for="mana">Mana:</label>
            <input type="number" id="mana" name="mana" value="{{ $player->mana }}" required>
        </div>

        <div>
            <label for="classId">Class: </label>
            <select name="classId" required>
                <option value="">Select a class</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">
                        {{ $class->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Save</button>
    </form>
</body>

</html>