<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Personal
 */
class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbname = 'indocp';
    private $port = '3306';

    public function DBConnection() {
        mysqli_connect($this->host, $this->user, $this->pwd, $this->dbname, $this->port);
    }

}
