<?php
use PHPUnit\Framework\TestCase;
class step1Test extends TestCase
{
    public function testHelloWorld()
    {
        $port = getenv('PORT') ?: '80';
        $url = "http://localhost:{$port}/step1";
        $response = file_get_contents($url);
        $this->assertEquals("HelloWorld", trim($response));
    }
}