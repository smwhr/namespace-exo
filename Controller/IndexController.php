<?php
namespace Controller;

class IndexController{
  public function indexAction(){
    echo "HOME";
  }

  public function meetAction(){
    $app = new \MeetMe\App();
    var_dump($app);
  }

  public function matchAction(){
    $app = new \MatchMe\App();
    var_dump($app);
  }

  public function tweetAction(){ // /index/tweet
    $a = new \Twitter\Manager\Auth();
    $u = $a->getUser();
    $t = $u->getTimeline();
    var_dump($t);// DOIT RENVOYER UN OBJET Twitter\Timeline
  }

}