<?php
namespace Links\Controllers;
use Links\Models\Profiles;
use Links\Models\Tweets;
class ShowprofileController extends ViewController
{
	 public function get()
  {
    session_start();
    $username=$_SESSION["username"];
    //$this->render("profile.html");
    $this->render("showprofile.html", ['username' => $username]);
  }

  public function post()
  {
  
    $usernamek=$_POST["username"];

    
    session_start();
    $userid=$_SESSION["userid"];
    $username=$_SESSION["username"];
    if($usernamek)
    {
      $showprofile=Profiles::showProfilebyname($usernamek);
      //$searchres=Tweets::SearchUser($usernamek);
    }
    else
    {
      $showprofile=Profiles::showProfilebyid($userid);    
      //$searchres=Tweets::SearchUser($username);
    }

    $profile=$showprofile["profile"];
    $utweets=$showprofile["tweets"];
   


    $this->render("showprofile.html", ['username' => $username, 'profile' =>$profile, 'utweets' => $utweets,]);
    
    



  }
 
}

?>