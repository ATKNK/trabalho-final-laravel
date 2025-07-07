@extends('layout.base')
@section('content')
    <div>
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Setups:</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.create') }}">Create</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
            @foreach ($setups as $setup)
                <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                    <div class="flex flex-row justify-between">
                        <h1 class="text-3xl">Setup #{{ $setup->id }}</h1>
                        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.show', $setup->id) }}">
                            Show
                        </a>
                    </div>
                    <ul class="p-3">
                        <li>Player: {{ $setup->player->name }}</li>
                        <li class="flex flex-row">Weapon: <p style="color: {{ $setup->weapon->rarity_color }}">
                                {{ $setup->weapon->name }}</p>
                        </li>
                        <li class="flex flex-row">Armor: <p style="color: {{ $setup->armor->rarity_color }}">
                                {{ $setup->armor->name }}</p>
                        </li>
                        <li class="flex flex-row">Accessory: <p style="color: {{ $setup->accessory->rarity_color }}">
                                {{ $setup->accessory->name }}</p>
                        </li>
                        <li class="flex flex-row">Class: {{ $setup->player->PlayerClass->name }}</li>
                    </ul>
                    <div class="flex flex-row justify-between items-center">
                        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.edit', $setup->id) }}">Edit</a>
                        <form action="{{ route('setups.destroy', $setup->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black"
                                type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
