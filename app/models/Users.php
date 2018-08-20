<?php
namespace Links\Models;
require 'ConnectionDB.php';
use Links\Models\connectionclass;

class Users extends connectionclass
{
	public function registerUser($data=[]){

		
		
		$name=$data['username'];
		$email=$data['email'];
		$pnumber=$data['phonenumber'];
		$password=$data['password'];



		// Check connection
		

		$con=connectionclass::connect();
		
			$sql= "INSERT INTO users (name, email, pnumber, password) VALUES ('$name','$email','$pnumber','$password')";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
		

	}


	public function loginUser($data=[]){

		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname = "ajax";


		// Create connection
		$con = mysqli_connect($servername, $username, $password, $dbname);
		
		$name=$data['username'];
		$password=$data['password'];

		

		// Check connection
		if (mysqli_connect_errno()) {

			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
              return false;
		}
		else{
			
			$sql= "SELECT * FROM users WHERE name='$name' AND password='$password'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			//$result = mysqli_fetch_array($res)
			$result=mysqli_fetch_array($res,MYSQLI_ASSOC);

			mysqli_close($con);
			//echo $result['email'];
			if($result)
			{return $result;}
			else{return false;}
		}


	}




}

?>