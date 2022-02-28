<?php

namespace Domain\Actions;

use Domain\Game\Actions\InitGameAction;
use Tests\TestCase;

class InitGameActionTest extends TestCase
{
    /**
     * @test
     * @dataProvider valueProvider
     */
    public function testIsValid($expectedResult)
    {
        $action = new InitGameAction();
        $value = $action->execute();

        $this->assertEquals($expectedResult, $value);
    }

    public function valueProvider()
    {
        return [
            'shouldBeValidWhenReturnTheGameOptions' => ['value' => [1 => 'start', 2 => 'exit']]
        ];
    }
}
