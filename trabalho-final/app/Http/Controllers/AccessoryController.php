<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\PlayerClass;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function index(){
        $accessories = Accessory::all();
        return view('accessory.index')->with(['accessories'=>$accessories]);
    }

    public function create(){
        $classes = PlayerClass::all();
        return view('accessory.create', compact('classes'));
    }

    public function store(Request $request){
        $name = $request->name;
        $effect = $request->effect;
        $effectModifier = $request->effectModifier;
        $classId = $request->classId;

        $accessory = new Accessory();
        $accessory->name = $name;
        $accessory->effect = $effect;
        $accessory->effectModifier = $effectModifier;
        $accessory->classId = $classId;

        $accessory->save();

        return redirect()->route('accessories.index')->with('success', 'Accessory created successfully!');
    }

    public function edit($id){
        $classes = PlayerClass::all();
        $accessory = Accessory::findOrFail($id);
        return view('accessory.edit', compact('accessory', 'classes'));
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
