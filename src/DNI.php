<?php

namespace App;

use Exception;

use function PHPUnit\Framework\throwException;

Class DNI{
    public function comprobarValidez(string $dni):bool{
        if (strlen($dni)==9){
            $caracteres = str_split($dni);
            $condiciones=0;
            
            foreach ($caracteres as $clave => $valor){    
                if ($clave <= 7 && is_numeric($valor)) $condiciones+=1;
                if ($clave == 8 && !is_numeric($valor)){
                    if ($valor == "U" || $valor == "I" || $valor == "O" || $valor == "Ñ") throw new Exception("Estas letras no son válidas: U, I, O y Ñ");
                    else $condiciones+=1;
                }
            }
            if ($condiciones == 9) return true;
            else throw new Exception("La secuencia del DNI no es correcta");
        }
        else throw new Exception("La longitud del DNI no es válida");
    }
}

?>
