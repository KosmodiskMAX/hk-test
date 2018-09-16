<?php

// $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1 ;
// $items_per_page = 12;
// $items_total_count = Photo::count_all();

// echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//
// $paginate = new Paginate($page, $items_per_page, $items_total_count);
//
// $sql = "SELECT * FROM photos ";
// $sql.= "LIMIT {$items_per_page} ";
// $sql.= "OFFSET {$paginate->offset()} ";
// $photos = Photo::find_by_query($sql);

//$photos= Photo::find_all();

include 'route.php';
include 'src/about.php';

$route = new Route();

$route->add('/');
$route->add('/about', 'About');
$route->add('/contact', function() {
  echo 'Contact';
});

// echo '<pre>';
// print_r($route);

$route->submit();

?>
