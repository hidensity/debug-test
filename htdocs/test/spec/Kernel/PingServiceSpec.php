<?php

namespace spec\Dbb\Kernel;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PingServiceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Dbb\Kernel\PingService');
    }

    public function it_should_return_ok()
    {
        $this->getOK()->shouldReturn('ok');
    }
}
