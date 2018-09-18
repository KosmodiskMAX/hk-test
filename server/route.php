<?php

class Route {
  private $_uri = array();
  private $_method = array();

  public function add($uri, $method = '') {
    $this->_uri[] = trim($uri, '/');
    $this->_method[] = $method;
  }

  public function submit() {
    $uriGetParam = isset($_GET['uri']) ? $_GET['uri'] : '/';

    //print_r($uriGetParam);
      
    foreach ($this->_uri as $key => $value) {
      if(preg_match("#^$value$#", $uriGetParam)) {
        
        if (is_string($this->_method[$key])) {
          $useMethod = $this->_method[$key];   
          new $useMethod();
        } else {
          echo 'FJA:';
          call_user_func($this->_method[$key]);
        }
      }
    }
  }
}
?>
