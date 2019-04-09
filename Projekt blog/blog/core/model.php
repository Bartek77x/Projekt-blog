<?php

class model {
    public $mysqli;
    public function __construct() {
        $this->mysqli=new mysqli('localhost', 'root', '', 'blog');
    }
    
}
