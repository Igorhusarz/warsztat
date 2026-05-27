<?php
use PHPUnit\Framework\TestCase;

require_once("unit.php

final class HelloTest extends TestCase
{
    
    public function testHello(): void
    {
        $input = "olek";
        $result = hello($input);
        $this->assertSame($result, "hello olek");
    }
}
