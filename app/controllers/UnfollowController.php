<?php
namespace Links\Controllers;
use Links\Models\Follow;
class UnfollowController extends ViewController
{
	public function post()
	{
		
		session_start();
		$fuserid=$_POST["fuserid"];
		$user_id=$_SESSION["userid"];

		$del=Follow::unfollowuser($user_id,$fuserid);

		if($del)
		{
			header("location:/dashboard");
		}
		else{echo "gannd mar gyi";}
	}
}