<?php

    class Core {
        
        protected $currentController = 'Pages';
        Protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            if(file_exists('../app/Controller/' . ucwords($url[0]) . '.php')){
                //If exists set the current controller
                $this->currentController = ucwords($url[0]);
                // unset 0 index
                unset($url[0]);
            }

            require_once '../app/Controller/' . $this->currentController . '.php';

            $this->currentController = new $this->currentController;

            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                    
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        }

        public function getUrl(){
            if(isset($_GET['url'])){
              $url = $_GET['url'];
              $url = filter_var($url, FILTER_SANITIZE_URL);
              $url = rtrim($url, '/');
              $url = explode('/', $url);
              return $url;
            }else {
              die('url is not set !!');
            }
        }

    }
