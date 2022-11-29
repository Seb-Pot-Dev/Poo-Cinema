<?php
class Movie
{
    private $_title;
    private $_releasedate;
    private $_lenght;
    private $_director;
    private $_synopsis;
    private $_casting;
    private $_genre;

    public function __Construct($title, $releasedate, $lenght, Director $director, $synopsis, Genre $genre)
    {
        $this->_title = $title;
        $this->_releasedate = $releasedate;
        $this->_lenght = $lenght;
        $this->_director = $director;
        $this->_director->addMovie($this); //ici
        $this->_synopsis = $synopsis;
        $this->_casting = [];
        $this->_genre = $genre;
        $this->_genre->addMovieToGenre($this);
    }

    public function getInfo()
    {
        echo "Description de " . $this->getTitle() . ":<br>" . $this->_title . " est un film réalisé par " . $this->_director . " et sortie en " . $this->_releasedate . ".<br>Synopsis : " . $this->_synopsis . "<br> Durée : " . $this->_lenght . " minutes.<br>*****************************<br>";
        foreach ($this->_castings as $casting) 
        {
            echo $casting->getActor() ." a joué ". $casting->getRole(). "<br>";
        }
    }
    public function addcasting($newcasting)
    {
        $this->_castings[] = $newcasting;
    }
    public function getCasting()
    {
        echo "Dans le film ".$this->getTitle()." le casting est le suivant : <br>";
        foreach ($this->_castings as $casting) 
        {
            echo $casting->getActor() ." a joué ". $casting->getRole(). "<br>";
        }
    }
    public function getGenre()
    {
        echo "Le film ".$this." appartient au genre : ".$this->_genre;
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
