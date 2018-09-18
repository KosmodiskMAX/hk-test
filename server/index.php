<?php

require_once("src/init.php");
//$photos= Photo::find_all();

include 'route.php';

$route = new Route();

$route->add('/');
$route->add('/about', 'About');
$route->add('/contact', function() {
  echo 'KONJ';
});

echo '<pre>';
print_r($route);

$route->submit();

?>
