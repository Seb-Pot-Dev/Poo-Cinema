<?php
class role
{
    private $_rolename;
    private $_casting;

    public function __construct($rolename)
    {
        $this->_rolename = $rolename;
        $this->_casting = [];
    }

    public function addcasting($newcasting)
    {
        array_push($this->_casting, $newcasting);
    }
}
