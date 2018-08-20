<?php
namespace Links\Controllers;
use Links\Models\Tweets;
class AddtweetController extends ViewController
{
	 public function post()
  {
  	session_start();
      $tweet=$_POST["tweet"];
      $user_id=$_SESSION["userid"];
      $username=$_SESSION["username"];



      $data=array("tweet"=>$tweet,"id"=>$user_id,"prefix"=>$username);

	  $res=Tweets::addtweet($data);
	  if($res){ header("location:/dashboard");}



	  
	  

  }

 
}

?>