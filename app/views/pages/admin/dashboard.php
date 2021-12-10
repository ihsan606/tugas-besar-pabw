<?php 
$menus = $data['menus'];
foreach($menus as $menu){
  echo $menu->category->name;
}
?>


