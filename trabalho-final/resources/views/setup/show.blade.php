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
                    <div class="flex flex-col text-2xl">Accessories: 
                        <p style="color: {{ $setup->accessory1->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory1->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory2->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory2->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory3->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory3->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory4->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory4->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory5->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory5->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory6->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory6->name ?? '-'}}</p>
                        <p style="color: {{ $setup->accessory7->rarity_color ?? '#FFFFFF' }}">{{ $setup->accessory7->name ?? '-'}}</p>
                    </div>
                </div>
                <div class="flex flex-col p-3">
                    <div class="flex flex-row text-2xl">Total Defense: {{ $totalDefense }}</div>
                    <div class="flex flex-row text-2xl">Base Damage: {{ $setup->weapon->baseDamage }}</div>
                    <div class="flex flex-row text-2xl">Total Damage: {{$baseDmg}}</div>
                    <div class="flex flex-row text-2xl">Damage Per Second: {{ $dps }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
