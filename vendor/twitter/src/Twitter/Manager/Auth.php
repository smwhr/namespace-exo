<?php
namespace Twitter\Manager;
use Twitter\User;

class Auth{
  public function getUser(){
    return new User();
  }
}