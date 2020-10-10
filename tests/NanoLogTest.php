<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use src\NanoLog;

class NanoLogTest extends TestCase
{
    public function test__call()
    {
        $nano = new NanoLog();
        $result = $nano->notExists();
        
    }
}
