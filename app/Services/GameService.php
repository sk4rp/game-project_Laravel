<?php

namespace App\Services;
use App\Models\Game;

class GameService
{
    public function getAllGames()
    {
        return Game::all();
    }

    public function createGame($data)
    {
        return Game::create($data);
    }

    public function getGameById($id)
    {
        return Game::find($id);
    }

    public function updateGame($game, $data)
    {
        $game->update($data);
        return $game;
    }

    public function deleteGame($game)
    {
        $game->delete();
    }

    public function getGamesByGenre($genre)
    {
        return Game::whereJsonContains('genres', $genre)->get();
    }
}

