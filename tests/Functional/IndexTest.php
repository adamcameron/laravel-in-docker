<?php

namespace adamcameron\lid\tests\Functional;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class IndexTest extends TestCase
{
    /** @testdox / responds with expected greeting */
    public function testIndex()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://nginx/');
        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
        $this->assertEquals("G'day world!", $response->getBody()->getContents());
    }
}
