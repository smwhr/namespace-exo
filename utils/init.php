<?php

spl_autoload_register(function($class_name){

  //classe avec Namespace
  $splited = explode("\\",$class_name);

  switch($splited[0]){
    case "Twitter":
      $classpath = "../vendor/twitter/src/";
      break;
    default:
      $classpath = "../";
      break;
  }

  $class_file = $classpath.implode("/", $splited).".php";
  var_dump($class_file);
  
  if(!file_exists($class_file)){
    throw new Exception("Cannot find ".$class_name);
  }
  require_once($class_file);
});