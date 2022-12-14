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

    public function testlongitudDNIMayor9():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("000000A");
        }
        catch(Exception $e){
            assertEquals("La longitud del DNI no es válida", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
    }

    public function testOchoNumerosLetra():void{
        $dni = new DNI();
        assertTrue($dni->comprobarValidez("00000001R"), "La secuencia del DNI no es válida");
    }

    public function testNueveNumerosNoLetra():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("000000012");
        }
        catch(Exception $e){
            assertEquals("La secuencia del DNI no es correcta", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
        
    }

    public function testNueveNumeros():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("000000000");
        }
        catch(Exception $e){
            assertEquals("La secuencia del DNI no es correcta", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
        
    }

    public function testLetraNoValida():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("00000000U");
        }
        catch(Exception $e){
            assertEquals("Estas letras no son válidas: U, I, O y Ñ", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
    }

    public function testLetraNoValida2():void{
        try{
            $dni = new DNI();
            $dni->comprobarValidez("00000000Ñ");
        }
        catch(Exception $e){
            assertEquals("Estas letras no son válidas: U, I, O y Ñ", $e->getMessage(), "No se ha lanzado la excepción correcta");
        }
    }
}
?>