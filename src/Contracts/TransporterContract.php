<?php

namespace Slvler\Tmdb\Contracts;

use Psr\Http\Message\ResponseInterface;
use Slvler\Tmdb\BuildRequest;

interface TransporterContract
{
    public function request(BuildRequest $request);

    /**
     * Sends a stream request to a server.
     */
    public function requestStream(BuildRequest $request);
}