<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Modifier;
use App\Models\PlayerClass;
use Illuminate\Http\Request;
use PhpParser\Modifiers;

class AccessoryController extends Controller
{
    public function index(){
        $accessories = Accessory::all();
        return view('accessory.index')->with(['accessories'=>$accessories]);
    }

    public function create(){
        $modifiers = Modifier::all();
        $classes = PlayerClass::all();
        return view('accessory.create', compact('classes', 'modifiers'));
    }

    public function store(Request $request){
        $name = $request->name;
        $modifierId = $request->modifierId;
        $effectModifier = $request->effectModifier;
        $rarity = $request->rarity;
        $classId = $request->classId;

        $accessory = new Accessory();
        $accessory->name = $name;
        $accessory->modifierId = $modifierId;
        $accessory->effectModifier = $effectModifier;
        $accessory->rarity = $rarity;
        $accessory->classId = $classId;

        $accessory->save();

        return redirect()->route('accessories.index')->with('success', 'Accessory created successfully!');
    }

    public function edit($id){
        $classes = PlayerClass::all();
        $modifiers = Modifier::all();
        $accessory = Accessory::findOrFail($id);
        return view('accessory.edit', compact('accessory', 'classes', 'modifiers'));
    }

    public function update(Request $request, $id){
        $accessory = Accessory::findOrFail($id);
        $accessory->update($request->all());
        $accessory->save();

        return redirect()->route('accessories.index')->with('success', 'Accessory updated successfully!');
    }

    public function destroy(Accessory $accessory){
        $accessory->delete();

        return redirect()->route('accessories.index')->with('success', 'Accessory deleted successfully!');
    }
}
