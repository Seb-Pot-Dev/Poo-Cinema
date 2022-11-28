<?php
class Movie
{
    private $_title;
    private $_releasedate;
    private $_lenght;
    private $_director;
    private $_synopsis;
    private $_casting;

    public function __Construct($title, $releasedate, $lenght, Director $director, $synopsis)
    {
        $this->_title = $title;
        $this->_releasedate = $releasedate;
        $this->_lenght = $lenght;
        $this->_director = $director;
        $this->_director->addMovie($this); //ici
        $this->_synopsis = $synopsis;
        $this->_casting = [];
    }

    public function getInfo()
    {
        foreach ($this->_casting as $key)
        {
        echo "Description de ". $this->_title . ":<br>".$this->_title. " est un film réalisé par " . $this->_director . " et sortie en " . $this->_releasedate . ".<br>Synopsis : " . $this->_synopsis . "<br> Durée : " . $this->_lenght . " minutes.<br>*****************************<br>";
        
        }
    }
    public function addcasting($newcasting)
    {
        array_push($this->_casting, $newcasting);
    }
    public function getTitle()
    {
        return $this->_title;
    }
    public function __toString()
    {
        return $this->_title;
    }
    
}
