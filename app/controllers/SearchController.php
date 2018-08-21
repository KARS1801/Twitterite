<?php
namespace Links\Controllers;
use Links\Models\Tweets;
class SearchController extends ViewController
{
	 public function post()
  {
      $usersearch=$_POST["user_search"];
      
      $searchres=Tweets::SearchUser($usersearch);
		session_start();
      if ($searchres) {
      	
	    $_SESSION["usersearchres"]=$searchres;
	    $_SESSION["usersearch"]=$usersearch;

        header("location:/dashboard");
      }

      else{
      		$_SESSION["usersearch"]="";
      		$_SESSION["usersearchres"]="";
      		 header("location:/dashboard");
  			}

  }

 
}

?>