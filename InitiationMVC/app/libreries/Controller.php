<?php

  class Controller {

      //Load Model
      public function model($model){
          //Requiring model
          if(file_exists('../app/Model/' . $model .'.php')){
              require_once '../app/Model/' . $model . '.php';
          }else {
              die('File does not exist.');
          }

          // Returning an instance
          return new $model();
      }

      public function view($view, $data = []){
          //check if file exists
          if(file_exists('../app/View/interfaces/' . $view . '.php')){
              require_once '../app/View/interfaces/' . $view . '.php';
          }else {
              die('File does not exist.');
          }
      }
  }
