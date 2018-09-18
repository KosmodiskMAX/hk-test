<?php

require_once("src/init.php");
//$photos= Photo::find_all();

//$user = new User;
//$user->username = "Batman";
//$user->ime ="Bruce";
//$user->prezime = "Wayne";
//$user->date = date('d-m-y');
//
//$user->create();
//  $user = User::find_by_id(7);
//  $user->delete();

 $users = User::find_all();
  foreach($users as $user){
    echo "<pre>";
    print_r($user);
  }
 $users = Ocena::find_all();
  foreach($users as $user){
    echo "<pre>";
    print_r($user);
  }
 $users = Macka::find_all();
  foreach($users as $user){
    echo "<pre>";
    print_r($user);
  }
?>
