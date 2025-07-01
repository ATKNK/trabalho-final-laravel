<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Creating an armor:</h1>
    <form action="{{ route('armors.store') }}" method="POST">
        @csrf

        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" required>
            </div>

            <div>
                <label for="setBonus">Set Bonus: </label>
                <input type="text" name="setBonus" required>
            </div>

            <div>
                <label for="setBonusModifier">Set Bonus Modifier: </label>
                <input type="text" name="setBonusModifier" required>
            </div>

            <div>
                <label for="defense">Defense: </label>
                <input type="text" name="defense" required>
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
        </div>

        <button type="submit">Save</button>
    </form>
</body>
</html>