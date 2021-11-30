<?php

class Controller {
  public function view($view, $data = [], $layout = ""){
    if($layout == 'customer'){
      $this::getComponent('customer/headerCustomer', $data);
      require_once '../app/views/' . $view . '.php';
      $this::getComponent('customer/footerCustomer', $data);
    }else if($layout == 'admin'){
      $this::getComponent('admin/headerAdmin', $data);
      require_once '../app/views/' . $view . '.php';
      $this::getComponent('admin/footerAdmin', $data);
    }else{
      require_once '../app/views/' . $view . '.php';
    }
  }

  private static function getComponent($view, $data = []){
    require_once '../app/views/components/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}