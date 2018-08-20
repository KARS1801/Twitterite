<?php
namespace Links\Controllers;
class DashboardController extends ViewController
{
	 public function get()
  {
      session_start();
  		$linkData="karan";
  		$userData=$_SESSION["username"];

    $this->render("dashboard.html", ['links' => $linkData, 'user' => $userData]);

  }

 
}

?>