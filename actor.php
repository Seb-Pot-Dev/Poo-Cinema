<?php
class Actor extends Person
{
    private $_role;

    public function __construct($lastname, $firstname, $sexe, $dateofbirth, $role)
    {
        parent::__construct($lastname, $firstname, $sexe, $dateofbirth);
        $this->_role = $role;
    }
    function getInfo()
    {
        echo $this->_lastname;
    }
    function getFilmographie()
    {
    }
}
