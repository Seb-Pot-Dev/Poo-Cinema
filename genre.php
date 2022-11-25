<?php
class genre
{
    private $_genrename;
    private $_movies;
    private function __Construct($genrename, Movie $movies)
    {
        $this->_genrename = $genrename;
        $this->_movies = $movies;
    }
}
