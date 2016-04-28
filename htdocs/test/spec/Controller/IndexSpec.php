<?php

namespace spec\Dbb\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Dbb\Http\Request;
use Dbb\Kernel\PingService;

class IndexSpec extends ObjectBehavior
{
    public function let(Request $request)
    {
        $this->beConstructedWith($request);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Dbb\Controller\Index');
    }

    public function it_should_return_correct_ping_response(PingService $pingService)
    {
        $pingService->getOK()->willReturn('ok');
        $this->pingAction($pingService)->getContent()->shouldReturn('{"status":"ok"}');
    }
}
