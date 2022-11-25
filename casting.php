<?php
class Casting
{
    private $_movie;
    private $_role;
    private $_actor;
    private function __construct(movie $movie, Role $role, Actor $actor)
    {
        $this->_movie = $movie;
        $this->_role = $role;
        $this->_actor = $actor;
    }
}
