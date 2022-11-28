<?php
class Director extends Person
{
    private $_allmovies;

    public function __construct($lastname, $firstname, $sexe, $dateofbirth)
    {
        parent::__construct($lastname, $firstname, $sexe, $dateofbirth);
        $this->_allmovies = [];
    }
    public function addMovie($movies)
    {
        array_push($this->_allmovies, $movies);
    }
    public function getInfo()
    {
        foreach ($this->_allmovies as $key)
        {
            echo $key;
        }
    }
    public function __toString()
    {
        return $this->_lastname." ".$this->_firstname;
    }
}
