<?php
class Actor extends Person
{
    private $_castings;

    public function __construct($lastname, $firstname, $sexe, $dateofbirth)
    {
        parent::__construct($lastname, $firstname, $sexe, $dateofbirth);
        $this->_castings=[];
    }
    function getFilmographie()
    {
        foreach ($this->_castings as $film)
        {
            return $film->getMovie()->getTitle()."<br>";
        }
    }

    public function addcasting($newcasting)
    {
        $this->_castings [] = $newcasting;
    }

    public function getCasting()
    {
        foreach ($this->_castings as $casting) 
        {
            echo $casting->getActor() ." a joué ". $casting->getRole()."<br>";
        }
}
}