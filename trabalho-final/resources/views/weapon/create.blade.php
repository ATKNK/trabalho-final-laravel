@extends('layout.base')
@section('content')
    <div class="w-full flex flex-row justify-between items-center">
        <h1 class="text-4xl">Creating a Weapon:</h1>
        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('weapons.create') }}">Create</a>
    </div>

    <div>
        <form action="{{ route('weapons.store') }}" method="POST">
            @csrf

            <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
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
    </div>
@endsection
