<?php
use PHPUnit\Framework\TestCase;
require 'Addition.php';
class AdditionTest extends TestCase{
    public function testAdd(){
        $obj = new Addition();
        $result = $obj->add(5, 3);
        $c = 8;
        $this->assertEquals($result, $c);
    }
}

?>