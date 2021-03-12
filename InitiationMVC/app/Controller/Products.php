<?php

class Products extends Controller {

  public function __construct() {
      $this->productModel = $this->model('Product');
  }

  //set Selected product details into index 
  public function index(){
  	$this->view('product-details');
  	
  }

}
