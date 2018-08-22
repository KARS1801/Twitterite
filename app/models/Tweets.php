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
		$date = date('Y/m/d H:i:s');
		
		
        $tweet=preg_replace('/[^a-zA-Z0-9_ -]/s', ' ', $tweet);
        


		

		$con=connectionclass::connect();


		
			$sql= "INSERT INTO tweets (user_id, prefix, tweets, tweetdate) VALUES ('$id', '$prefix', '$tweet', '$date')";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
		
	}



	public function showCurrentTweets($userid)
	{
		$con=connectionclass::connect();

		$sql= "SELECT prefix, tweets, tweetdate FROM tweets WHERE user_id='$userid'";

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



	public function deleteTweet($deltweet,$delprefix)
	{
		$con=connectionclass::connect();


		
			$sql= "DELETE FROM tweets WHERE prefix='$delprefix' AND tweets='$deltweet'";

			mysqli_query($con,$sql)
			or die(mysqli_error($con));
			mysqli_close($con);
			
			return true;
	}



	public function SearchUser($usersearch)
	{
		$con=connectionclass::connect();


		$sql= "SELECT * FROM tweets WHERE prefix='$usersearch'";

			$res=mysqli_query($con,$sql)
			or die(mysqli_error($con));
			if (!$res) {
				return false;
			}
           else{
           	while ($result = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
			    $results[] = $result;
            }
			mysqli_close($con);
			
			return $results;
           }
			
	}
}