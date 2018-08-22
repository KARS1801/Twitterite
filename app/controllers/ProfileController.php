<?php
namespace Links\Controllers;
use Links\Models\Profiles;
class ProfileController extends ViewController
{
	 public function get()
  {
    session_start();
    $username=$_SESSION["username"];

    $showfollow=$_SESSION["followed"];
    $showfollowers=$_SESSION["following"];
    //$this->render("profile.html");
    $this->render("profile.html", ['username' => $username, 'followed' => $showfollow, 'following' => $showfollowers]);
  }

  public function post()
  {
    $fullname=$_POST["fullname"];
    $age=$_POST["age"];
    $occupation=$_POST["occupation"];
    session_start();
    $userid=$_SESSION["userid"];
    $username=$_SESSION["username"];

    $showfollow=$_SESSION["followed"];
    $showfollowers=$_SESSION["following"];

    $profile=Profiles::saveProfile($fullname,$username,$age,$occupation,$userid);
    if($profile)
    {
     
      $this->render("profile.html", ['username' => $username, 'followed' => $showfollow, 'following' => $showfollowers]);
     // header("location:/profile");

    }



  }
 
}

?>