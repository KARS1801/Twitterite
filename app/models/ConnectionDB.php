<?php
namespace Links\Models;
class connectionclass{

	public function connect()
	{
			$servername = "localhost";
			$username = "root";
			$password = "password";
			$dbname = "ajax";


			// Create connection
			$con = mysqli_connect($servername, $username, $password, $dbname);


			if (mysqli_connect_errno()) {

				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				return false;
			}
			else{return $con;}
	}

}

?>