<?php
namespace Twitter;

class User{

   public function getTimeline(){
      $t = new Timeline();
      return $t;
   }
  
}