<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creating player:</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="health">Health:</label>
        <input type="number" id="health" name="health" required>

        <label for="mana">Mana:</label>
        <input type="number" id="mana" name="mana" required>

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

        <button type="submit">Create Player</button>
    </form>
</body>
</html>