<?php
class genre
{
    private $_genrename;
    private $_casting;

    public function __Construct($genrename)
    {
        $this->_genrename = $genrename;
        $this->_casting = [];
    }
}
