<?php

namespace App\Api\Game\Controllers;

use App\Api\Game\Requests\GameRequest;
use App\Core\Http\Controllers\Controller;
use Domain\Game\Actions\InitGameAction;
use Domain\Game\Actions\PrepareGameAction;


class GameController extends Controller
{
    public function init(InitGameAction $action)
    {
        $data = $action->execute();

        return response()->json($data);
    }

    public function prepareGame(GameRequest $gameRequest, PrepareGameAction $action)
    {
        $data = $action->execute($gameRequest);
        return response()->json($data);
    }

    public function runningGame(GameRequest $gameRequest, RunningGameAction $action)
    {
        $data = $action->execute($gameRequest);
        return response()->json($data);
    }
}
