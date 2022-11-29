<?php
class role
{
    private $_rolename;
    private $_castings;

    public function __construct($rolename)
    {
        $this->_rolename = $rolename;
        $this->_castings = [];
    }

    public function addcasting($newcasting)
    {
        $this->_castings[] = $newcasting;
    }

    public function __toString()
    {
        return $this->_rolename;
    }

    public function getCasting()
    {
        echo $this->_rolename . " a été joué par : <BR>";
        foreach ($this->_castings as $casting) {
            echo $casting->getActor() . "<br>";
        }
    }
}
