<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weapon;
use App\Models\PlayerClass;

class WeaponController extends Controller
{
    public function index()
    {
        $weapons = Weapon::all();
        return view('weapon.index')->with(['weapons' => $weapons]);
    }

    public function create()
    {
        $classes = PlayerClass::all();
        return view('weapon.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $weapon = new Weapon();

        $weapon->name = $request->name;
        $weapon->baseDamage = $request->baseDamage;
        $weapon->knockback = $request->knockback;
        $weapon->attackSpeed = $request->attackSpeed;
        $weapon->rarity = $request->rarity;
        $weapon->classId = $request->classId;

        $weapon->save();

        return redirect()->route('weapons.index')->with('success', 'Weapon created successfully!');
    }

    public function show(Weapon $weapon)
    {
        return view('weapon.show', compact('weapon'));
    }

    public function edit($id)
    {
        $classes = PlayerClass::all();
        $weapon = Weapon::findOrFail($id);
        return view('weapon.edit', compact('weapon', 'classes'));
    }

    public function update(Request $request, $id)
    {
        $weapon = Weapon::find($id);
        $weapon->update($request->all());
        $weapon->save();

        return redirect()->route('weapons.index')->with('success', 'Weapon updated successfully!');
    }

    public function destroy(Weapon $weapon)
    {
        $weapon->delete();

        return redirect()->route('weapons.index')->with('success', 'Weapon deleted successfully!');
    }
}
