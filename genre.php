<?php
class genre
{
    private $_genrename;
    private $_movies;
    

    public function __Construct($genrename)
    {
        $this->_genrename = $genrename;
        $this->_movies = [];
    }

    public function addMovieToGenre($movies)
    {
        $this->_movies[]= $movies;
    }
    public function getMovies()
    {
        echo "Les films du genre ".$this." sont: ";
        foreach ($this->_movies as $Movies)
        {
            echo $Movies." ; ";
        }
    }
    public function getName()
    {
        return $this->_genrename;
    }
    public function getGenre()
    {
        return $this->_movies;
    }
    
    public function __toString()
    {
        return $this->_genrename;
    }
    
}
