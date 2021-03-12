<?php

class Client {
    private $model;

    public function __construct(){
        $this->model = new Model;
    }

    //method to set the Client informations at signup
    public function setClientRegistered($name, $email, $password){

        //prepare statment
        $this->model->query(
            'INSERT INTO client(nom, email, password)
             VALUES (:name, :email, :password);'
        );

        //bind the value into the variables
        $this->model->bind(':name', $name);
        $this->model->bind(':email', $email);
        $this->model->bind(':password', $password);

        // execute the data query into the database
        $this->model->execute();

    }

    //method to find the Client needed by email at login
    public function findClient($email){

        //prepare statment.
        $this->model->query('SELECT * FROM client WHERE email = :email;');

        //bind the value into the email variable
        $this->model->bind(':email', $email);

        //execute the binded query
        $this->model->execute();

        $valid = $this->model->rowCount();

        return $valid;
    }

    //use to know the client id needed for Command index
    public function knowClient($email){

        //prepare statment.
        $this->model->query('SELECT * FROM client WHERE email = :email;');

        //bind the value into the email variable
        $this->model->bind(':email', $email);

        //execute the binded query
        $this->model->execute();

        //fetch the result set into variable
        return $this->model->resultSet();

    }


}
