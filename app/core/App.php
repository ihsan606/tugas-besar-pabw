<?php 

class App 
{
  protected $controller = "LandingPageController";
  protected $method = "index";
  protected $params = [];

  public function __construct()
  {
    //controller
    $url = $this->parseURL();
    if(isset($url[0])){
      if(file_exists('../app/controllers/admin/' . $url[0] . 'Controller.php')){
        $this->controller = $url[0] . 'Controller';
        unset($url[0]);
        require_once '../app/controllers/admin/' . $this->controller . '.php';
        $this->controller = new $this->controller;
      }else if(file_exists('../app/controllers/customer/' . $url[0] . 'Controller.php')){
        $this->controller = $url[0] . 'Controller';
        unset($url[0]);
        require_once '../app/controllers/customer/' . $this->controller . '.php';
        $this->controller = new $this->controller;
      }else{
        unset($url[0]);
        require_once '../app/controllers/customer/' . $this->controller . '.php';
        $this->controller = new $this->controller;
      }   
    }else{
        unset($url[0]);
        require_once '../app/controllers/customer/' . $this->controller . '.php';
        $this->controller = new $this->controller;
      }    
    
    //method
    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    //params
    if(!empty($url)){
      $this->params = array_values($url);
    }

    //jalankan controller & method, serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL()
  {
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  } 
}