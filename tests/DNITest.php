<?php

use App\DNI;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;

Class DNITest extends TestCase{

    public function testlongitudDNI():void{
        $dni = new DNI();
        assertTrue($dni->comprobarValidez("00000000A"), "La longuitud del DNI no es válida");
    }

    public function testlongitudDNIMenor9():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("000000A");
        }
        catch(Exception $e){
            assertEquals("La longitud del DNI no es válida", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
    }
}
?>