<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(Game::all(), 200);
    }

    public function show($id)
    {
        return response()->json(Game::find($id), 200);
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }
    
    public function destroy($id)
    {

    }   
}
