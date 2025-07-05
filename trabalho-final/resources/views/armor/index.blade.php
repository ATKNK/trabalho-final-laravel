@extends('layout.base')
@section('content')
    <div>
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Armors:</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('armors.create') }}">Create</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
            @foreach ($armors as $armor)
                <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                    <h1 class="text-3xl" style="color: {{ $armor->rarity_color }}">{{ $armor->name }}</h1>
                    <ul class="p-3">
                        <li>Name: {{ $armor->name }}</li>
                        <li>Set Bonus: {{ $armor->setBonus }} {{ $armor->setBonusModifier }}</li>
                        <li>Defense: {{ $armor->defense }}</li>
                        <li>Class: {{ $armor->playerClass->name }}</li>
                    </ul>
                    <div class="flex flex-row justify-between items-center">
                        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('armors.edit', $armor->id) }}">Edit</a>
                        <form action="{{ route('armors.destroy', $armor->id) }}" method="POST">
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
