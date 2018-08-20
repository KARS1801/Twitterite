<?php
namespace Links\Models;
require 'ConnectionDB.php';
use Links\Models\connectionclass;

class Tweets extends connectionclass
{

	public function addtweet($data=[])
	{
 		
		
		
		$tweet=$data['tweet'];
		$id=$data['id'];
		
		
        $tweet=preg_replace('/[^a-zA-Z0-9_ -]/s', ' ', $tweet);
        


		

		$con=connectionclass::connect();


		
			$sql= "INSERT INTO tweets (user_id, tweets) VALUES ('$id','$tweet')";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
		
	}
}