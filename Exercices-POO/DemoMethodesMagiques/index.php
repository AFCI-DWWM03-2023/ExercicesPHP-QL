<?php

class maClasse{
    private $attr1;
    private $attr2;

    public function __construct($val1, $val2)
    {
        $this->attr1 = $val1;
        $this->attr2 = $val2;
    }

    public function __toString()
    {
        return "Attribut1 : {$this->attr1}, Attribut2 : {$this->attr2}";
    }
}

    $ob = new maClasse("valeur1", "valeur2");

    echo $ob;

