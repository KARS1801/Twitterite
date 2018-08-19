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

	if(!$user)
  {
    header("location:/login");
  }
	else
    {
      $this->loguser($user);
      header("location:/dashboard");
    }

  }




  function loguser($usr)
  {
    session_start();

    $_SESSION["loggedin"] = true;
    $_SESSION["userid"] =  $usr['user_id'];
    $_SESSION["username"] = $usr['name'];
  }

}


?>