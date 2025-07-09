@extends('layout.base')
@section('content')
    <div class="flex flex-col justify-center items-center">
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="text-4xl">Creating a Setup:</h1>
            <a class="bg-sky-600 p-3 m-1 rounded-xl" href="{{ route('setups.index') }}">Back</a>
        </div>

        <div class="flex flex-col items-center">
            <form class="w-xl" action="{{ route('setups.store') }}" method="POST">
                @csrf
                <div class="bg-sky-800 p-3 m-6 md:w-4/5 rounded-xl">
                    <div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="playerId">Player:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="playerId"
                                id="playerId">
                                @foreach ($players as $player)
                                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="weaponId">Weapon:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="weaponId"
                                id="weaponId">
                                @foreach ($weapons as $weapon)
                                    <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="armorId">Armor:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="armorId"
                                id="armorId">
                                @foreach ($armors as $armor)
                                    <option value="{{ $armor->id }}">{{ $armor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory1Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory1Id"
                                id="accessory1Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory2Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory2Id"
                                id="accessory2Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory3Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory3Id"
                                id="accessory3Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory4Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory4Id"
                                id="accessory4Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory5Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory5Id"
                                id="accessory5Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory6Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory6Id"
                                id="accessory6Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex flex-row justify-between m-3">
                            <label class="text-lg" for="accessory7Id">Accessory:</label>
                            <select class="border-1 border-stone-950 bg-stone-800 rounded-xl p-1" name="accessory7Id"
                                id="accessory7Id">
                                <option value="{{ null }}">-</option>
                                @foreach ($accessories as $accessory)
                                    <option value="{{ $accessory->id }}">{{ $accessory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="bg-sky-600 p-3 rounded-xl cursor-pointer" style="text-shadow: 2px 2px 2px black"
                        type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
