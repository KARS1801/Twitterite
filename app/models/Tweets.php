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
		$prefix=$data['prefix'];
		
		
        $tweet=preg_replace('/[^a-zA-Z0-9_ -]/s', ' ', $tweet);
        


		

		$con=connectionclass::connect();


		
			$sql= "INSERT INTO tweets (user_id, prefix, tweets) VALUES ('$id', '$prefix', '$tweet')";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
		
	}



	public function showCurrentTweets($userid)
	{
		$con=connectionclass::connect();

		$sql= "SELECT prefix, tweets FROM tweets WHERE user_id='$userid'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			//$result=mysqli_fetch_array($res,MYSQLI_ASSOC);
			while ($result = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
			    $results[] = $result;
			}
			mysqli_close($con);
			
			//echo $results[];
			//return $result;
			//echo '<pre>';
			//print_r($results);
			//echo results[1]["tweets"];
            return $results;
			
			

	}
}