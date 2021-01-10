<?php

class db {
    private $servername = 'localhost:8889';
    private $username = 'root';
    private $password = 'root';
    private $database = 'weedingcontacts';

    private $connection;

    // connecting to db
    public function connectToDb() {
        $connection = new mysqli($this->servername,$this->username,$this->password,$this->database);
        if($connection->connect_error) {
            die("error");
        } else {
            //echo("Connected");
            return $this->connection = $connection;
        }
    }

    // closing db
    public function closeDb() {
        $this->connection->close();
    }


    // sending contacts to db
    public function contacts($name,$lName,$email,$message) {
        $add = "INSERT INTO `contacts` (`name`, `lastName`, `email`, `message`) VALUES
        ('$name', '$lName', '$email', '$message')";
        return $this->connection->query($add);
    }


    } // end class