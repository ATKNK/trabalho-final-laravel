<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editing a weapon:</h1>
    <form action="{{ route('weapons.update', $weapon->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{ $weapon->name }}" required>
            </div>

            <div>
                <label for="baseDamage">Base Damage: </label>
                <input type="text" name="baseDamage" value="{{ $weapon->baseDamage }}" required>
            </div>

            <div>
                <label for="knockback">Knockback: </label>
                <input type="text" name="knockback" value="{{ $weapon->knockback }}" required>
            </div>

            <div>
                <label for="attackSpeed">Attack Speed: </label>
                <input type="text" name="attackSpeed" value="{{ $weapon->attackSpeed }}" required>
            </div>

            <div>
                <label for="classId">Class: </label>
                <select name="classId" required>
                    <option value="">Select a class</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}">
                            {{$class->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit">Save</button>
    </form>
</body>

</html>
