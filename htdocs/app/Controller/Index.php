<?php

namespace Dbb\Controller;

use Dbb\Http\Response;
use Dbb\Kernel\PingService;

class Index extends Base
{
    /**
     * @param PingService $pingService
     * @return Response
     */
    public function pingAction(PingService $pingService)
    {
        return new Response(['status' => $pingService->getOK()]);
    }
}
