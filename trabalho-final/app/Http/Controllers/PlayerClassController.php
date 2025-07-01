<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerClass;

class PlayerClassController extends Controller
{
    public function index(){
        $classes = PlayerClass::all();
        return view('class.index')->with(['classes' => $classes]);
    }

    public function create(){
        return view('class.create');
    }

    public function store(Request $request){
        $name = $request->name;

        $class = new PlayerClass();
        $class->name = $name;

        $class->save();

        return redirect()->route('classes.index')->with('success', 'Class created successfully!');
    }

    public function edit($id){
        $class = PlayerClass::findOrFail($id);
        return view('class.edit', compact('class'));
    }

    public function update(Request $request, $id){
        $class = PlayerClass::findOrFail($id);
        $class->update($request->all());
        $class->save();

        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    public function destroy(PlayerClass $class){
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Class deleted successfully');
    }
}
