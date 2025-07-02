<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Accessories:</h1>
        <a href="{{ route('accessories.create') }}">Create</a>

    @foreach ($accessories as $accessory)
        <div>
            <h1>{{ $accessory->name }}</h1>
            <ul>
                <li>Name: {{ $accessory->name }}</li>
                <li>Effect: {{ $accessory->effect }} {{ $accessory->effectModifier }}</li>
            </ul>
            <a href="{{ route('accessories.edit', $accessory->id) }}">Edit</a>
            <form action="{{ route('accessories.destroy', $accessory->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        </div>
    @endforeach
</body>

</html>
