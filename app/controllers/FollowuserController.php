<?php
namespace Links\Controllers;
use Links\Models\Follow;
class FollowuserController extends ViewController
{
	

  public function post()
  {
  
   session_start();
   $user_id=$_SESSION["userid"];
   $username=$_SESSION["username"];
   $fuserid=$_POST["userid"];
   $fusername=$_POST["username"];

   $follow=Follow::followuser($user_id,$username,$fuserid,$fusername);
   //$showfollow=Follow::showfollowers($user_id);

   //$_SESSION["followed"]=$showfollow;

   
    header("location:/dashboard");


  }
 
}

?>