<?php
namespace Twitter;

class User{

   public function getTimeline(){
      $t = new Timeline();
      return $t;
   }

   public function postTweet($text){
    throw new \Exception("User is not connected");
    //DO STUFF
   }
  
}