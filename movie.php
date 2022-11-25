<?php
class Movie
{
    private $_title;
    private $_releasedate;
    private $_lenght;
    private $_director;
    private $_synopsis;

    public function __Construct($title, $releasedate, $lenght, Director $director, $synopsis)
    {
        $this->_title = $title;
        $this->_releasedate = $releasedate;
        $this->_lenght = $lenght;
        $this->_director = $director;
        $this->_director->addMovie($this); //ici
        $this->_synopsis = $synopsis;
    }

    public function getInfo()
    {
        echo "Description : " . $this->_title . " est un film réalisé par " . $this->_director . " et sortie en " . $this->_releasedate . ".<br>Synopsis : " . $this->_synopsis . "<br> Durée : " . $this->_lenght . " heures.";
    }
}
