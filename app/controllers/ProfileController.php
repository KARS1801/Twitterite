<?php
namespace Links\Controllers;
use Links\Models\Profiles;
class ProfileController extends ViewController
{
	 public function get()
  {
    session_start();
    $username=$_SESSION["username"];
    //$this->render("profile.html");
    $this->render("profile.html", ['username' => $username]);
  }

  public function post()
  {
    $fullname=$_POST["fullname"];
    $age=$_POST["age"];
    $occupation=$_POST["occupation"];
    session_start();
    $userid=$_SESSION["userid"];
    $username=$_SESSION["username"];

    $profile=Profiles::saveProfile($fullname,$username,$age,$occupation,$userid);
    if($profile)
    {
     
      $this->render("profile.html", ['username' => $username]);
     // header("location:/profile");

    }



  }
 
}

?>