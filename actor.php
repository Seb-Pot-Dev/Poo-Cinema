<?php
class Actor extends Person
{
    private $_casting;

    public function __construct($lastname, $firstname, $sexe, $dateofbirth)
    {
        parent::__construct($lastname, $firstname, $sexe, $dateofbirth);
        $this->_casting=[];
    }
    function getFilmographie()
    {
        foreach ($this->_casting as $film)
        {
            return $film->getMovie()->getTitle()."<br>";
        }
    }

    public function addcasting($newcasting)
    {
        array_push($this->_casting, $newcasting);
    }
    public function getCasting()
    {
        return $this->_casting;
    }
}
