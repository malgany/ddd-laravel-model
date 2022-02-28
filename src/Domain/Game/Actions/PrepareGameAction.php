<?php

namespace Domain\Game\Actions;


use App\Api\Game\Requests\GameRequest;
use Illuminate\Support\Facades\Redis;

class PrepareGameAction
{
    private $redis;

    public function __call()
    {
        $this->redis = new Redis();
    }

    public function execute(GameRequest $request): array
    {
        $requestId = $request->getRequestId();
        $redis = new Redis();
        $queueGame = $redis->get('queueGame');

        if (in_array($requestId, $queueGame)) {
            return [
                'message' => 'RequestId já está na fila de espera',
                'status' => Response::STATUS_ERROR
            ];
        }

        $queueGame[] = $requestId;
        $redis->set('queueGame', $queueGame);
        return [
            'message' => 'RequestId adicionado na fila de espera',
            'status' => Response::STATUS_SUCCESS
        ];
    }

    private function setQueueGame($requestId): void
    {
        $queueGameAll = $this->redis->get('queueGameAll');
        if(count($queueGameAll) > 0) {
            foreach ($queueGameAll as $key => $queueGame) {
                if (count($queueGame) == 1) {
                    array_push($queueGameAll[$key], $requestId);
                }
            }
        }
    }
}
