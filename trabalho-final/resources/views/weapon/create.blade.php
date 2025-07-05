@extends('layout.base')
@section('content')
    <div class="flex flex-col justify-center items-center">
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Creating a Weapon:</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('weapons.index') }}">Back</a>
        </div>

        <div class="flex flex-col items-center">
            <form class="w-xl" action="{{ route('weapons.store') }}" method="POST">
                @csrf

                <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="name">Name: </label>
                        <input class="border-1 border-stone-950 rounded-xl p-1" type="text" name="name" required>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="baseDamage">Base Damage: </label>
                        <input class="border-1 border-stone-950 rounded-xl p-1" type="text" name="baseDamage" required>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="knockback">Knockback: </label>
                        <input class="border-1 border-stone-950 rounded-xl p-1" type="text" name="knockback" required>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="attackSpeed">Attack Speed: </label>
                        <input class="border-1 border-stone-950 rounded-xl p-1" type="text" name="attackSpeed" required>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="rarity">Rarity: </label>
                        <input class="border-1 border-stone-950 rounded-xl p-1" type="text" name="rarity" required>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="classId">Class: </label>
                        <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="classId" required>
                            <option value="">Select a class</option>
                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">
                                    {{ $class->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black"
                        type="submit">Save</button>
            </form>
        </div>


    </div>
    </div>
@endsection
