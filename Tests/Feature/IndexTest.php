<?php

namespace adamcameron\lid\Tests\Feature;

use adamcameron\lid\Tests\TestCase;
use Symfony\Component\HttpFoundation\Response;

class IndexTest extends TestCase
{
    /** @testdox / responds with expected framework & version number */
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertSee("Laravel v10");
    }
}
