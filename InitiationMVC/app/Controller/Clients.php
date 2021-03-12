<?php

class Clients extends Controller {

  public function __construct() {
      $this->clientModel = $this->model('Client');
  }

  public function signup(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          $data = array(
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
          );

          if(empty($data['name'])){
              $data['name_err'] = 'Please enter name';
          }

          if(empty($data['email'])){
              $data['email_err'] = 'Please enter email';
          }elseif($this->clientModel->findClient($data['email'])) {
              $data['email_err'] = 'This Client already exists';
          }

          if(empty($data['password'])){
              $data['password_err'] = 'Please enter password';
          } elseif(strlen($data['password']) < 6){
              $data['password_err'] = 'Password must be at least 6 characters';
          }

          if(empty($data['confirm_password'])){
              $data['confirm_password_err'] = 'Please confirm password';
          } else {
          if($data['password'] != $data['confirm_password']){
              $data['confirm_password_err'] = 'Passwords do not match';
          }
      }

      if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // execute the hash function that hashes the password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

          //execute the clientModel method that register the client into the database
          $this->clientModel->setClientRegistered($data['name'], $data['email'], $data['password']);
          header('Location: http://localhost/InitiationMVC/Shops/shop');
      } else {
          $this->view('signup-form', $data);
      }

      } else {
          $data = array(
            'name' => '',
            'email' => '',
            'password' => '',
            'confirm_password' => '',
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
          );

          $this->view('signup-form', $data);
      }


  }

  public function login(){

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          $data = array(
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => ''
          );

          if(empty($data['password'])){
              $data['password_err'] = 'Please enter password';
          }

          if(empty($data['email'])){
              $data['email_err'] = 'Please enter email';
          }

          if($this->clientModel->findClient($data['email']) == 0){
            $data['password_err'] = 'Please enter valid';
            $data['email_err'] = 'Please enter valid';
          }

          if(empty($data['email_err']) && empty($data['password_err'])){
            header('Location: http://localhost/InitiationMVC/Pages/shop');
          } else {
              $this->view('login-form', $data);
          }

      } else {
          $data = array(
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => ''
          );

          $this->view('login-form', $data);
      }

  }


}
