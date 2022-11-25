<?php
class role
{
    private $_rolename;
    private $_actor;

    public function __construct($rolename, $actor)
    {
        $this->_rolename = $rolename;
        $this->_actor = $actor;
    }
}
