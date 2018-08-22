<?php
namespace Links\Controllers;
use Links\Models\Follow;
class BlockController extends ViewController
{
	public function post()
	{
		session_start();
		$username=$_POST["username"];
		$userid=$_SESSION["userid"];

		$block=Follow::blockuser($username,$userid);

		header("location:/dashboard");
	}
}