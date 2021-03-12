<?php

class Shops extends Controller {

  public function __construct() {
      $this->shopModel = $this->model('Shop');
  }

  public function shop(){

    $data = $this->shopModel->getCards();
    $this->view('shop', $data);
    
  }

  //trigger pagination in shop controller
  public function paginator() {

  }


}
