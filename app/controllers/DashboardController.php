<?php
namespace Links\Controllers;
use Links\Models\Tweets;
class DashboardController extends ViewController
{
	 public function get()
  {
      session_start();
  		$username=$_SESSION["username"];
  		$userid=$_SESSION["userid"];

      $searchres=$_SESSION["usersearchres"];
      $usersearch=$_SESSION["usersearch"];


      $showfollow=Tweets::showfollowers($userid);
      $showfollowers=Tweets::showfollowed($userid);
      $_SESSION["followed"]=$showfollow;
      $_SESSION["following"]=$showfollowers;

  		//function to add current user posts to the div


  		$current_tweets=Tweets::showCurrentTweets($userid);
  		//echo $current_tweets[0];

    $this->render("dashboard.html", ['ctweets' => $current_tweets, 'username' => $username, 'usersearched' => $usersearch, 'utweets' => $searchres, 'userid' => $userid, 'followed' => $showfollow, 'following' => $showfollowers]);

  }
 
}

?>