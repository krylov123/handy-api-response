<?php

use PHPUnit\Framework\TestCase;

final class HandyApiResponseTest extends TestCase
{
    public function testObjectToArray()
    {
        $obj = new \Krylov123\HandyApiResponse();
        $array = $obj->toArray();
        $this->assertTrue(is_array($array));
    }
}