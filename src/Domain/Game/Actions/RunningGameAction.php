<?php

namespace Domain\Game\Actions;

use Illuminate\Support\Facades\Redis;

class RunningGameAction
{
    public function execute(GameRequest $gameRequest)
    {
        $redis = new Redis();
        $queueGame = $redis->get('queueGame');
    }

}
