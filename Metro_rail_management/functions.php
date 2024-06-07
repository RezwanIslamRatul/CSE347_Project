<?php

function check_login($con) {

	// Check if user ID is set in session
	if (isset($_SESSION['user_id'])) {
  
	  $id = $_SESSION['user_id'];
	  $query = "select * from users where user_id = '$id' limit 1";
  
	  $result = mysqli_query($con, $query);
  
	  // Verify successful query execution and fetched data
	  if ($result && mysqli_num_rows($result) > 0) {
		$user_data = mysqli_fetch_assoc($result);
		return $user_data;  // Return user data if login is successful
	  }
	}
  
	// Login unsuccessful (no user ID in session or query failed)
	// **Consider adding logic here to handle unsuccessful login:**
	// - You could redirect to a login page (index.php) with an error message
	// - You could display an error message on the current page
  
	// Example: Redirect to login page with error message
	header("Location: index1.php?error=login_failed");
	exit;
  }
  

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}