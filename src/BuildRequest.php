<?php

namespace Slvler\Tmdb;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class BuildRequest
{
    public $baseUrl;
    public $headers;
    public $queryParams;
    public $path;
    public function __construct($baseUrl, $headers, $queryParams, $path)
    {
        $this->baseUrl = $baseUrl;
        $this->headers = $headers;
        $this->queryParams = $queryParams;
        $this->path = $baseUrl.'/'.$path;
    }
}