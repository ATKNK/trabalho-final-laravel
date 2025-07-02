<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\PlayerClass;

class PlayerController extends Controller
{
    public function index(){
        $players = Player::all();
        return view('player.index')->with(['players' => $players]);
    }

    public function create(){
        $classes = PlayerClass::all();
        return view('player.create', compact('classes'));
    }

    public function store(Request $request){
        $player = new Player();

        $player->name = $request->name;
        $player->health = $request->health;
        $player->mana = $request->mana;
        $player->classId = $request->classId;

        $player->save();

        return redirect()->route('players.index')->with('success', 'Player created successfully!');
    }

    public function show(Player $player){
        return view('player.show', compact('player'));
    }

    public function edit($id){
        $classes = PlayerClass::all();
        $player = Player::findOrFail($id);
        return view('player.edit', compact('classes', 'player'));
    }

    public function update(Request $request, $id){
        $player = Player::find($id);
        $player->update($request->all());
        $player->save();

        return redirect()->route('players.index')->with('success', 'Player updated successfully!');
    }

    public function destroy(Player $player){
        $player -> delete();
        return redirect()->route('players.index')->with('success', 'Player deleted successfully!');
    }
}
