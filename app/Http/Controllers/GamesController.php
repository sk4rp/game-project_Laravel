<?php

namespace App\Http\Controllers;

use App\Services\GameService;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    private $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function index()
    {
        $games = $this->gameService->getAllGames();
        return response()->json($games);
    }

    public function store(Request $request)
    {
        $game = $this->gameService->createGame($request->all());
        return response()->json($game, 201);
    }

    public function show($id)
    {
        $game = $this->gameService->getGameById($id);
        if (!$game) {
            return response()->json(
                [
                    'message' => 'Игра не найдена'
                ], 404);
        }
        return response()->json($game);
    }

    public function update(Request $request, $id)
    {
        $game = $this->gameService->getGameById($id);
        if (!$game) {
            return response()->json(
                [
                    'message' => 'Игра не найдена'
                ], 404);
        }
        $game = $this->gameService->updateGame($game, $request->all());
        return response()->json($game);
    }

    public function destroy($id)
    {
        $game = $this->gameService->getGameById($id);
        if (!$game) {
            return response()->json(
                [
                    'message' => 'Игра не найдена'
                ], 404);
        }
        $this->gameService->deleteGame($game);
        return response()->json(
            [
                'message' => 'Игра удалена'
            ]);
    }

    public function getGamesByGenre($genre)
    {
        $games = $this->gameService->getGamesByGenre($genre);
        return response()->json($games);
    }
}
