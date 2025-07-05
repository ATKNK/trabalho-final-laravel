@extends('layout.base')
@section('content')
    <div class="w-full flex flex-row justify-between items-center">
        <h1 class="text-4xl">Players:</h1>
        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('players.create') }}">Create</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
        @foreach ($players as $player)
            <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                <h1 class="text-3xl">{{ $player->name }}</h1>
                <ul class="p-3">
                    <li>Health: {{ $player->health }}</li>
                    <li>Mana: {{ $player->mana }}</li>
                    <li>Class: {{ $player->playerClass->name }}</li>
                </ul>
                <div class="flex flex-row justify-between items-center">
                    <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('players.edit', $player->id) }}">Edit</a>
                    <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
