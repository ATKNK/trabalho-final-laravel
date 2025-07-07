@extends('layout.base')
@section('content')
    <div class="flex flex-col justify-center items-center">
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Setup #{{ $setup->id }}</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.index') }}">Back</a>
        </div>

        <div class="flex flex-col items-center bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
            <div class="text-4xl">Player: {{ $setup->player->name }}</div>
            <div class="flex flex-row justify-around">
                <div class="flex flex-col items-start p-3">
                    <div class="flex flex-row text-2xl">Weapon: <p style="color: {{ $setup->weapon->rarity_color }}">
                            {{ $setup->weapon->name }}</p>
                    </div>
                    <div class="flex flex-row text-2xl">Armor: <p style="color: {{ $setup->armor->rarity_color }}">
                            {{ $setup->armor->name }}</p>
                    </div>
                    <div class="flex flex-row text-2xl">Accessory: <p style="color: {{ $setup->accessory->rarity_color }}">
                            {{ $setup->accessory->name }}</p>
                    </div>
                </div>
                <div class="flex flex-col p-3">
                    <div class="flex flex-row text-2xl">Total Defense: {{ $defense }}</div>
                    <div class="flex flex-row text-2xl">Base Damage: {{ $setup->weapon->baseDamage }}</div>
                    <div class="flex flex-row text-2xl">Damage Per Second: {{ $dps }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
