<?php
namespace Links\Controllers;
class LogoutController extends ViewController
{
	 public function get()
  {
      session_start();
      $_SESSION = array();
      session_destroy();


	header("location:/login");
	exit;

  }

 
}

?>