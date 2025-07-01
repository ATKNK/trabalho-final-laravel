<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Creating a class:</h1>
    <form action="{{ route('classes.store')}}" method="POST">
        @csrf

        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" required>
        </div>

        <button type="submit">Save</button>
    </form>
</body>
</html>