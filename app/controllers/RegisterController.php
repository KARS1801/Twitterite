<?php
namespace Links\Controllers;
use Links\Models\Users;
class RegisterController extends ViewController
{
   public function get()
  {
  
    $this->render("register.html");
  }


  public function post(){
  	
  	$username=$_POST["username"];
  	$email=$_POST["email"];
  	$phonenumber=$_POST["phonenumber"];
  	$password=$_POST["password"];

  	$register=array("username"=>$username,"email"=>$email,"phonenumber"=>$phonenumber,"password"=>$password);
  	
  

  	$user=Users::registerUser($register);

  	
  	if (!$user) {
  		header("location:/register");
  		
  	}
  	else{
  		header("location:/login");
  		
  	}
  }

}


?>