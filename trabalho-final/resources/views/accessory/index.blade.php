@extends('layout.base')
@section('content')
    <div class="w-full flex flex-row justify-between items-center">
        <h1 class="text-4xl">Accessories:</h1>
        <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('accessories.create') }}">Create</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
        @foreach ($accessories as $accessory)
            <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                <h1 class="text-3xl" style="color: {{ $accessory->rarity_color }}">{{ $accessory->name }}</h1>
                <ul class="p-3">
                    <li>Name: {{ $accessory->name }}</li>
                    <li>Effect: {{ $accessory->effect }} {{ $accessory->effectModifier }}</li>
                </ul>
                <div class="flex flex-row justify-between items-center">
                    <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('accessories.edit', $accessory->id) }}">Edit</a>
                    <form action="{{ route('accessories.destroy', $accessory->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
