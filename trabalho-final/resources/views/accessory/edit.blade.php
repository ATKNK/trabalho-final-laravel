<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editing an accessory:</h1>
    <form action="{{ route('accessories.update', $accessory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{$accessory->name}}" required>
            </div>

            <div>
                <label for="effect">Effect: </label>
                <input type="text" name="effect" value="{{$accessory->effect}}" required>
            </div>

            <div>
                <label for="effectModifier">Effect Modifier: </label>
                <input type="text" name="effectModifier" value="{{$accessory->effectModifier}}" required>
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