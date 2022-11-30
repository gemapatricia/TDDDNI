<?php

namespace App;

use Exception;

Class DNI{
    public function comprobarValidez(string $dni):bool{
        if (strlen($dni)==9) return true;
        else throw new Exception("La longitud del DNI no es válida");
    }
}

?>
