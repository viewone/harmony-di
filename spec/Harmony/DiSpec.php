<?php

namespace spec\Harmony;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiSpec extends ObjectBehavior
{
    private $prophet;

    function it_is_initializable()
    {
        $this->shouldHaveType('Harmony\Di');
    }
}
