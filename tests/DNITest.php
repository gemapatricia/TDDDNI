<?php

use App\DNI;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

Class DNITest extends TestCase{

    public function testlongitudDNI():void{
        $dni = new DNI();
        assertTrue($dni->comprobarValidez("0000000A"), "La longuitud del DNI no es válida");
    }
}
?>