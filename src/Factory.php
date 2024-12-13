<?php

namespace Slvler\Tmdb;

use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class Factory
{
    private ?ClientInterface $httpClient = null;
    private string $baseUrl = 'https://api.themoviedb.org/3';
    private array $headers = [
        'Content-Type' => 'application/json',
    ];
    private array $queryParams = [];
    private string $path;
    public function withHttpClient(ClientInterface $client): self
    {
        $this->httpClient = $client;

        return $this;
    }
    public function withBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }
    public function withHttpHeader(string $name, string $value): self
    {
        $this->headers[$name] = $value;

        return $this;
    }
    public function withQueryParam(string $name, string $value): self
    {
        $this->queryParams[$name] = $value;

        return $this;
    }
    public function withPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }
    public function make(): string
    {
        $client = $this->httpClient ??= Psr18ClientDiscovery::find();

        $transporter = new BuildRequest(
            baseUrl: $this->baseUrl,
            headers: $this->headers,
            queryParams: $this->queryParams,
            path: $this->path
        );

        $response = $client->sendRequest(new \GuzzleHttp\Psr7\Request('GET', $transporter->path, $transporter->headers));

        $contents = $response->getBody()->getContents();


        $this->throwIfJsonError(response: $response, contents: $contents);
        return $contents;
    }

    private function throwIfJsonError(ResponseInterface $response, string|ResponseInterface $contents)
    {
        if ($response->getStatusCode() < 400) {
            return false;
        }

        if ($contents instanceof ResponseInterface) {
            $contents = $contents->getBody()->getContents();
        }
        return $contents;
    }
}