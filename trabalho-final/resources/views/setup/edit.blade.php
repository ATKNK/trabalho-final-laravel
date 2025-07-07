@extends('layout.base')
@section('content')
    <div class="flex flex-col justify-center items-center">
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Editing a Setup:</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.index') }}">Back</a>
        </div>

        <div class="flex flex-col items-center">
            <form class="w-xl" action="{{ route('setups.update', $setup->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="playerId">Player: </label>
                        <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="playerId" required>
                            <option value="">Select a player</option>
                            @foreach ($players as $player)
                                <option value="{{ $player->id }}">
                                    {{ $player->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="weaponId">Weapon: </label>
                        <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="weaponId" required>
                            <option value="">Select a weapon</option>
                            @foreach ($weapons as $weapon)
                                <option style="color: {{ $weapon->rarity_color }}" value="{{ $weapon->id }}">
                                    {{ $weapon->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="armorId">Armor: </label>
                        <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="armorId" required>
                            <option value="">Select an Armor</option>
                            @foreach ($armors as $armor)
                                <option style="color: {{ $armor->rarity_color }}" value="{{ $armor->id }}">
                                    {{ $armor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-row justify-between m-3">
                        <label class="text-lg" for="accessoryId">Accessory: </label>
                        <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="acessoryId" required>
                            <option value="">Select an Accessory</option>
                            @foreach ($accessories as $accessory)
                                <option style="color: {{ $accessory->rarity_color }}" value="{{ $accessory->id }}">
                                    {{ $accessory->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
