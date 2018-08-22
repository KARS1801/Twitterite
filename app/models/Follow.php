<?php
namespace Links\Models;
require 'ConnectionDB.php';
use Links\Models\connectionclass;

class Follow extends connectionclass
{
	public function followuser($user_id,$username,$fuserid,$fusername)
	{
		$con=connectionclass::connect();


		
			$sql= "INSERT INTO follow (user_id, username, fuserid, fusername) VALUES ('$user_id', '$username', '$fuserid', '$fusername')";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
	}

	public function showfollowers1($user_id)
	{
		$con=connectionclass::connect();


		
			$sql= "SELECT fusername FROM follow WHERE user_id='$user_id'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			while ($result = mysqli_fetch_array($res,MYSQLI_NUM)) {
			    $results[] = $result;
			}
			mysqli_close($con);
			
			return $results;
	}


	public function unfollowuser($user_id,$fuserid)
	{
		$con=connectionclass::connect();

		$sql= "DELETE FROM follow WHERE user_id='$user_id' AND fuserid='$fuserid'";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
	}

	public function blockuser($username,$userid)
	{
		$con=connectionclass::connect();

		$sql= "DELETE FROM follow WHERE username='$username' AND fuserid='$userid'";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
	}
}