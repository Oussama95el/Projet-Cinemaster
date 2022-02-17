<?php

class DB{
    private $servername;
    private $dbname;
    private $user;
    private $passeword;
    private $charset;

    public function connect(){
        $this->dbname = "cinemaster";
        $this->servername = "localhost";
        $this->user = "root";
        $this->passeword = "";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->user, $this->passeword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Failed :".$e->getMessage();
        }
    }
}