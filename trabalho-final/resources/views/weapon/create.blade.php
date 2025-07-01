<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Creating a weapon:</h1>
    <form action="{{ route('weapons.store') }}" method="POST">
        @csrf

        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" required>
            </div>

            <div>
                <label for="baseDamage">Base Damage: </label>
                <input type="text" name="baseDamage" required>
            </div>

            <div>
                <label for="knockback">Knockback: </label>
                <input type="text" name="knockback" required>
            </div>

            <div>
                <label for="attackSpeed">Attack Speed: </label>
                <input type="text" name="attackSpeed" required>
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
