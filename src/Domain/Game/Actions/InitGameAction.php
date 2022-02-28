<?php

namespace Domain\Game\Actions;

use Domain\Game\Models\Game;

class InitGameAction
{
    public function execute() : array
    {
        return [
            Game::ID_START => Game::MENU_START,
            Game::ID_EXIT => Game::MENU_EXIT,
        ];
    }
}
