<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('classes.create') }}">Create</a>
    <div>
        @foreach ($classes as $class)
            <div>
                <h1>{{ $class->name }} - {{ $class->id }}</h1>
                <a href="{{ route('classes.edit', $class->id) }}">Edit</a>
                <form action="{{ route('classes.destroy', $class->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>

</body>

</html>
