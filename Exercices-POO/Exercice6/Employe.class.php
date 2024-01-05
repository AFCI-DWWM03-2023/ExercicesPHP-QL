<?php


class Employe{
    public function __construct(private string $nom, protected int $salaire){
    }

    public function __set($name, $value)
    {
        echo "Affectation de la valeur $value à l'attribut '$name'";
        $this->$name = $value;
    }

    public function __get($name) {
        echo "Recupération de l'attribut '$name' : ";
        if (property_exists($this,$name)) {
            return $this->$name;
        } else {
            trigger_error("\nL'attribut $name n'existe pas", E_USER_ERROR);
        }

    }

    public function __toString()
    {
        return "Nom : {$this->nom}, Salaire : {$this->salaire}€";
    }

    public function augmenterSalaire($augm){
        $this->salaire *= 1 + $augm/100;
    }
}