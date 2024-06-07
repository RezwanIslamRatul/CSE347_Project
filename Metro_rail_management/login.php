<?php 

session_start();

	include("connection1.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index1.php");
						exit;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: url('360_F_292905667_yFUJNJPngYeRNlrRL4hApHWxuYyRY4kN.jpg') no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #box {
            background-color: rgba(128, 128, 128, 0.9);
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        #box form {
            display: flex;
            flex-direction: column;
        }

        #text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            margin-bottom: 15px;
        }

        #button {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: lightblue;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #button:hover {
            background-color: deepskyblue;
        }

        .login-title {
            font-size: 20px;
            margin: 10px;
            color: white;
        }

        .back-link {
            margin-top: 20px;
            color: white;
        }

        .back-link a {
            color: lightblue;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="box">
        <form method="post" action="login.php">
            <div class="login-title">Login</div>
            <label for="user_name" style="display:none;">Username</label>
            <input id="text" type="text" name="user_name" placeholder="Enter Username" required>
            <label for="password" style="display:none;">Password</label>
            <input id="text" type="password" name="password" placeholder="Enter Password" required>
            <input id="button" type="submit" value="Login">
        </form>
        <p class="back-link">Not admin? Go back to <a href="index.php">Home Page</a></p>
    </div>
</body>
</html>
