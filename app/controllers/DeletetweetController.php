<?php
namespace Links\Controllers;
use Links\Models\Tweets;
class DeletetweetController extends ViewController
{
	 public function post()
  {
      $deltweet=$_POST["tobedel_tweet"];
      $delprefix=$_POST["tobedel_prefix"];

      $del=Tweets::deleteTweet($deltweet,$delprefix);

      if ($del) {
        header("location:/dashboard");
      }

  }

 
}

?>