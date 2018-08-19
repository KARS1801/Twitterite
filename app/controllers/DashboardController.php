<?php
namespace Links\Controllers;
class DashboardController extends ViewController
{
	 public function get()
  {
      session_start();
  		$linkData="karan";
  		$userData=$_SESSION["username"];
//$twig = new Twig_Environment($loader);
//$app["twig"]->addGlobal("theme", $theme);
  
    //$this->render("dashboard.html");
    $this->render("dashboard.html", ['links' => $linkData, 'user' => $userData]);

  }

 
}

?>