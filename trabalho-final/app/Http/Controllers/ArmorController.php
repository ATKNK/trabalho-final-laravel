<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armor;
use App\Models\PlayerClass;

class ArmorController extends Controller
{
    public function index(){
        $armors = Armor::all();
        return view('armor.index')->with(['armors'=> $armors]);
    }

    public function create(){
        $classes = PlayerClass::all();
        return view('armor.create', compact('classes'));
    }

    public function store(Request $request){
        $name = $request->name;
        $setBonus = $request->setBonus;
        $setBonusModifier = $request->setBonusModifier;
        $defense = $request->defense;
        $classId = $request->classId;

        $armor = new Armor();
        $armor->name = $name;
        $armor->setBonus = $setBonus;
        $armor->setBonusModifier = $setBonusModifier;
        $armor->defense = $defense;
        $armor->classId = $classId;

        $armor->save();

        return redirect()->route('armors.index')->with('success', 'Armor created successfully!');
    }

    public function edit($id){
        $classes = PlayerClass::all();
        $armor = Armor::findOrFail($id);
        return view('armor.edit', compact('armor', 'classes'));
    }

    public function update(Request $request, $id){
        $armor = Armor::findOrFail($id);
        $armor->update($request->all());
        $armor->save();
        
        return redirect()->route('armors.index')->with('success', 'Armor updated successfully!');
    }

    public function destroy(Armor $armor){
        $armor->delete();

        return redirect()->route('armors.index')->with('success', 'Armor updated successfully!');
    }
}
