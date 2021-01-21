<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function Game(){
        $game = DB::table('gameplays')
            ->join('games', 'games.id', '=', 'gameplays.game_id')
            ->join('players', 'players.id', '=', 'gameplays.player_id')
            ->select('players.name AS Player Name', 'games.name AS Game Name', 'games.version', 'gameplays.date_played')
            //->groupBy('gameplays.date_played')
            ->distinct()
            ->orderBy('gameplays.date_played')
            ->limit(100)
            ->get();

        return response()->json($game);
    }

    public function GameCount(){
        $game = DB::table('gameplays AS GP')
            ->join('games AS G', 'G.id', '=', 'GP.game_id')
            ->join('players  AS P', 'P.id', '=', 'GP.player_id')
            ->select('P.name AS Player Name', 'G.name AS Game Name', 'G.version', DB::raw('count(GP.player_id)'))
            ->groupBy('P.id')
            ->get();

            return response()->json($game);
    }

    public function GameDateRange(Request $request){
        $startDate = $request->start;
        $endDate = $request->end;
        $game = DB::table('gameplays')
            ->join('games', 'games.id', '=', 'gameplays.game_id')
            ->join('players', 'players.id', '=', 'gameplays.player_id')
            ->select('players.name AS Player Name', 'games.name AS Game Name', 'games.version', 'gameplays.date_played')
            ->where('gameplays.date_played', '>=' ,$startDate )
            ->where('gameplays.date_played', '<=' ,$endDate )
            ->orderByDesc('gameplays.date_played')
            ->limit(100)
            ->get();

        return response()->json($game);
    }

    public function Games(){
        $allGames = Game::all();
        return response()->json($allGames);
    
    }
}
