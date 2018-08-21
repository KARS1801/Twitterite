<?php
namespace Links\Controllers;
use Links\Models\Tweets;
class DashboardController extends ViewController
{
	 public function get()
  {
      session_start();
  		$linkData="karan";
  		$username=$_SESSION["username"];
  		$userid=$_SESSION["userid"];

      $searchres=$_SESSION["usersearchres"];
      $usersearch=$_SESSION["usersearch"];

  		//function to add current user posts to the div


  		$current_tweets=Tweets::showCurrentTweets($userid);
  		//echo $current_tweets[0];



    $this->render("dashboard.html", ['ctweets' => $current_tweets, 'username' => $username, 'usersearched' => $usersearch, 'utweets' => $searchres]);

  }
 
}

?>