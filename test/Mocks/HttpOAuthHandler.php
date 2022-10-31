<?php
namespace DTS\eBaySDK\Test\Mocks;

use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Promise\FulfilledPromise;

class HttpOAuthHandler
{
    public $url;
    public $headers;
    public $body;

    public function __construct()
    {
    }

    public function __invoke(RequestInterface $request)
    {
        $this->url = $request->getUri();
        $this->headers = [];
        foreach ($request->getHeaders() as $name => $values) {
            $this->headers[$name] = implode(', ', $values);
        }
        $this->body = $request->getBody();

        // Return a fake json response.
        $json = file_get_contents(__DIR__.'/../Mocks/OAuthRestResponse.json');

        return new FulfilledPromise(new Response(200, [], Utils::streamFor($json)));
    }
}
