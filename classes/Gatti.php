<?php

require_once __DIR__ . '/Categoria.php';

// Trasferisco le proprietà e i metodi della classe genitore Categoria nella classe figlia Gatti 

class Gatti extends Categoria {

    // Metodo per convertire l'oggetto in una stringa
    public function __toString() {
        return $this->icon; 
    }

}
