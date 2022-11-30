<?php

namespace App;

use Exception;

Class DNI{
    public function comprobarValidez(string $dni):bool{
        if (strlen($dni)==9){
            $caracteres = str_split($dni);
            $condiciones=0;
            
            foreach ($caracteres as $clave => $valor){    
                if ($clave <= 7 && is_numeric($valor)) $condiciones+=1;
                if ($clave == 8 && !is_numeric($valor)) $condiciones+=1;
            }
            if ($condiciones == 9) return true;
        }
        else throw new Exception("La longitud del DNI no es válida");
    }
}

?>
