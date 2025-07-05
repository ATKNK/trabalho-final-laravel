@extends('layout.base')
@section('content')
    <div class="w-full flex flex-row justify-between items-center">
        <h1 class="text-4xl">Weapons:</h1>
        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('weapons.create') }}">Create</a>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
        @foreach ($weapons as $weapon)
            <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                <h1 class="text-3xl" style="color: {{ $weapon->rarity_color }}">{{ $weapon->name }}</h1>
                <ul class="p-3">
                    <li>Damage: {{ $weapon->baseDamage }}</li>
                    <li>Knockback: {{ $weapon->knockback }}</li>
                    <li>Attack Speed: {{ $weapon->attackSpeed }}</li>
                    <li>Class: {{ $weapon->playerClass->name ?? 'No Class' }}</li>
                </ul>
                <div class="flex flex-row justify-between items-center">
                    <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('weapons.edit', $weapon->id) }}">Edit</a>
                    <form action="{{ route('weapons.destroy', $weapon->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
