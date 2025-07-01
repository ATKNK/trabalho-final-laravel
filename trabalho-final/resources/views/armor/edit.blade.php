<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editing an armor:</h1>
    <form action="{{ route('armors.update', $armor->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{$armor->name}}" required>
            </div>

            <div>
                <label for="setBonus">Set Bonus: </label>
                <input type="text" name="setBonus" value="{{$armor->setBonus}}" required>
            </div>

            <div>
                <label for="setBonusModifier">Set Bonus Modifier: </label>
                <input type="text" name="setBonusModifier" value="{{$armor->setBonusModifier}}" required>
            </div>

            <div>
                <label for="defense">Defense: </label>
                <input type="text" name="defense" value="{{$armor->defense}}" required>
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