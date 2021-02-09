<?php

class Db {
    private $host = "localhost";
    private $user = "both7479_portfolio";
    private $password = "tomato1090bous!";
    private $dbName = "both7479_portfolio";

    public function connect(){
        return new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8', $this->user, $this->password);
    }
}

?>