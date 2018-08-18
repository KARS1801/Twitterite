<?php
namespace Links\Controllers;
use Links\Models\Users;
class LoginController extends ViewController
{
  public function get()
  {
  
    $this->render("login.html");
  }


  public function post()
  {
  	$username=$_POST["username"];
  	$password=$_POST["password"];
  	

  	$login=array("username"=>$username,"password"=>$password);

  	$user=Users::loginUser($login);

	if(!$user){header("location:/login");}
	else{header("location:/dashboard");}

  }

}


?>