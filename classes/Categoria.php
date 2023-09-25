<?php

class Categoria {

    protected $icon;

    public function __construct(string $_icon) {

        // Nel costruttore invochiamo la funzione setIcon() per mantenere il controllo sulla variabile
        $this->setIcon($_icon);

    }
    
    /**
     * Get the value of icon
     */ 
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @return  self
     */ 
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }
}

?>