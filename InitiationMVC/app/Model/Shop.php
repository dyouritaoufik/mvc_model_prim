<?php

class Shop {
    private $model;

    public function __construct(){
        $this->model = new Model;
    }

    // get cards from database into use
    public function getCards(){

        //prepare statment
        $this->model->query(
            'SELECT * FROM article;'
        );

        //execute the data query into the database
        $this->model->execute();

        //fetch the result set into variable
        return $this->model->resultSet();

    }

    // set selected product into products 
    public function setDetails() {

    }

    // count products in cards table using rout parameters
    public function Paginator(){


    }

    //use parameter in rout
    public function setPaginationData($params){


    }



}
