<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\Accessory;
use App\Models\Armor;
use App\Models\Player;
use App\Models\Weapon;

use App\Services\ModifierService;

class SetupController extends Controller
{
    public function index()
    {
        $setups = Setup::all();
        return view('setup.index')->with(['setups' => $setups]);
    }

    public function create()
    {
        $accessories = Accessory::all();
        $armors = Armor::all();
        $players = Player::all();
        $weapons = Weapon::all();

        return view('setup.create', compact('accessories', 'armors', 'players', 'weapons'));
    }

    public function store(Request $request)
    {
        $setup = new Setup();

        $setup->playerId = $request->playerId;
        $setup->weaponId = $request->weaponId;
        $setup->armorId = $request->armorId;
        $setup->accessory1Id = $request->accessory1Id;
        $setup->accessory2Id = $request->accessory2Id;
        $setup->accessory3Id = $request->accessory3Id;
        $setup->accessory4Id = $request->accessory4Id;
        $setup->accessory5Id = $request->accessory5Id;
        $setup->accessory6Id = $request->accessory6Id;
        $setup->accessory7Id = $request->accessory7Id;

        $setup->save();

        return redirect()->route('setups.index')->with('success', 'Setup created successfully!');
    }

    public function show(Setup $setup, ModifierService $modifierService)
    {
        $setup->load([
            'weapon',
            'armor.modifier',
            'accessory1.modifier',
            'accessory2.modifier',
            'accessory3.modifier',
            'accessory4.modifier',
            'accessory5.modifier',
            'accessory6.modifier',
            'accessory7.modifier',
        ]);

        $baseDmg = $setup->weapon->baseDamage;
        $atkSpeed = round(60 / $setup->weapon->attackSpeed);

        $totalDefense = floatval($setup->armor->defense ?? 0);
        $bonus = floatval($setup->armor->setBonusModifier ?? 0);
        $modifierIdArmor = $setup->armor->modifierId ?? null;

        if ($modifierIdArmor && $setup->armor->modifier) {
            $modName = strtolower($setup->armor->modifier->name);

            if (str_contains($modName, 'defense')) {
                $totalDefense = $modifierService->applyByModifierId($totalDefense, $bonus, $modifierIdArmor);
            }

            if (str_contains($modName, 'damage')) {
                $baseDmg = $modifierService->applyByModifierId($baseDmg, $bonus, $modifierIdArmor);
            }

            if (str_contains($modName, 'speed')) {
                $atkSpeed = $modifierService->applyByModifierId($atkSpeed, $bonus, $modifierIdArmor);
            }
        }

        for ($i = 1; $i <= 7; $i++) {
            $accessory = $setup->{'accessory' . $i} ?? null;

            if ($accessory && $accessory->modifier) {
                $modValue = floatval($accessory->effectModifier ?? 0);
                $modId = $accessory->modifierId;
                $modName = strtolower($accessory->modifier->name);

                if (str_contains($modName, 'defense')) {
                    $totalDefense = $modifierService->applyByModifierId($totalDefense, $modValue, $modId);
                }

                if (str_contains($modName, 'damage')) {
                    $baseDmg = $modifierService->applyByModifierId($baseDmg, $modValue, $modId);
                }

                if (str_contains($modName, 'speed')) {
                    $atkSpeed = $modifierService->applyByModifierId($atkSpeed, $modValue, $modId);
                }
            }
        }

        $dps = $baseDmg * $atkSpeed;

        return view('setup.show', compact('setup', 'dps', 'baseDmg', 'totalDefense'));
    }

    public function edit($id)
    {
        $accessories = Accessory::all();
        $armors = Armor::all();
        $players = Player::all();
        $weapons = Weapon::all();
        $setup = Setup::findOrFail($id);

        return view('setup.edit', compact('accessories', 'armors', 'players', 'weapons', 'setup'));
    }

    public function update(Request $request, $id)
    {
        $setup = Setup::find($id);
        $setup->update($request->all());
        $setup->save();

        return redirect()->route('setups.index')->with('success', 'Setup updated successfully!');
    }

    public function destroy(Setup $setup)
    {
        $setup->delete();
        return redirect()->route('setups.index')->with('success', 'Setup deleted successfully!');
    }
}
