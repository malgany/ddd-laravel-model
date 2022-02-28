<?php

namespace Domain\Game\DataTransferObject;

use App\Api\Game\Requests\GameRequest;
use Spatie\DataTransferObject\DataTransferObject;

class GameData extends DataTransferObject
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;


    public static function fromRequest(GameRequest $request): GameData
    {
        return new self([
            'id' => $request['id'],
            'name' => $request['name']
        ]);
    }
}
