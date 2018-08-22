<?php
namespace Links\Models;
require 'ConnectionDB.php';
use Links\Models\connectionclass;

class Profiles extends connectionclass
{
	public function saveProfile($fullname,$username,$age,$occupation,$userid)
	{
		$con=connectionclass::connect();

           $sql= "DELETE FROM profiles WHERE user_id='$userid'";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
		
			$sql2= "INSERT INTO profiles (user_id, username, fullname, age, occupation) VALUES ('$userid', '$username', '$fullname', '$age', '$occupation')";

			mysqli_query($con,$sql2)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
	}




	public function showProfilebyid($userid)
	{
		$con=connectionclass::connect();
		$sql= "SELECT * FROM profiles WHERE user_id='$userid'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
			mysqli_close($con);
			
			return $result;
	}

	public function showProfilebyname($username)
	{

		$con=connectionclass::connect();
		$sql= "SELECT * FROM profiles WHERE username='$username'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
			mysqli_close($con);

			
			
			return $result;
	}
}