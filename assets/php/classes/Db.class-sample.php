<?php

class Db {
    private $host = "XXX";
    private $user = "XXX";
    private $password = "XXX";
    private $dbName = "XXX";

    public function connect(){
        return new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8', $this->user, $this->password);
    }
}

?>