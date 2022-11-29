<?php
class Casting
{
    private $_movie;
    private $_role;
    private $_actor;

    public function __construct(movie $movie, Role $role, Actor $actor)
    {
        $this->_movie = $movie;
        $this->_movie->addcasting($this);

        $this->_role = $role;
        $this->_role->addcasting($this);

        $this->_actor = $actor;
        $this->_actor->addcasting($this);
    }

    public function getMovie()
    {
        return $this->_movie;
    }
    public function getRole()
    {
        return $this->_role;
    }
    public function getActor()
    {
        return $this->_actor;
    }
}
