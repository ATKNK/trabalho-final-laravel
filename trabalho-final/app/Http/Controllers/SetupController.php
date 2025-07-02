<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\Accessory;
use App\Models\Armor;
use App\Models\Player;
use App\Models\Weapon;

class SetupController extends Controller
{
    public function index(){
        $setups = Setup::all();
        return view('setup.index')->with(['setups' => $setups]);
    }

    public function create(){
        $accessories = Accessory::all();
        $armors = Armor::all();
        $players = Player::all();
        $weapons = Weapon::all();

        return view('setup.create', compact('accessories', 'armors', 'players', 'weapons'));
    }

    public function store(Request $request){
        $setup = new Setup();

        $setup->playerId = $request->playerId;
        $setup->weaponId = $request->weaponId;
        $setup->armorId = $request->armorId;
        $setup->accessoriesId = $request->accessoriesId;

        $setup->save();

        return redirect()->route('setups.index')->with('success', 'Setup created successfully!');
    }

    public function show(Setup $setup){
        return view('setup.show', compact('setup'));
    }

    public function edit($id){
        $accessories = Accessory::all();
        $armors = Armor::all();
        $players = Player::all();
        $weapons = Weapon::all();
        $setup = Setup::findOrFail($id);
        
        return view('setup.edit', compact('accessories', 'armors', 'players', 'weapons', 'setup'));
    }

    public function update(Request $request, $id){
        $setup = Setup::find($id);
        $setup->update($request->all());
        $setup->save();

        return redirect()->route('setups.index')->with('success', 'Setup updated successfully!');
    }

    public function destroy(Setup $setup){
        $setup->delete();
        return redirect()->route('setups.index')->with('success', 'Setup deleted successfully!');
    }
}
