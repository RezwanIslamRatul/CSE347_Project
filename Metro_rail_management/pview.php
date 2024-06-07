<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Information</title>
    <link rel="stylesheet" href="common.css">
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: #E4E400;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #d96459;
        }
        form {
            padding-top: 10px;
            text-align: left;
            font-size: 20px;
        }
        input {
            width: 250px;
            height: 30px;
            font-size: 20px;
        }
    </style>
</head>
<body background="papers.co-sf45-blue-blue-blue-gradation-blur-29-wallpaper.jpg" style="background-repeat:no-repeat;background-size:100%">
    <div class="heading">
        <center><h1>Metro Information</h1></center>
    </div>   
    <br>
    <div class="pages"></div>
    <br>
    <hr size="3" width="100%" align="center" color="black">

    <table>
        <tr>
            <th>metro_id</th>
            <th>name</th>
            <th>seat_availability</th>
            <th>schedule</th>
            <th>route</th>
        </tr>
        
        <?php
        function executeQuery($search_query) {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "metrorail_php";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query($search_query);
            return $result;
        }

        $search_query = "SELECT * FROM metroinformation";
        $result = executeQuery($search_query);

        if ($result) { // Check if query execution was successful
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['metroid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['seat_availability'] . "</td><td>" . $row['schedule'] . "</td><td>" . $row['route'] . "</td></tr>";
            }
        } else {
            // Handle failed query execution (e.g., display error message)
            echo "<tr><td colspan='5'>Error: Unable to retrieve mretro information.</td></tr>";
        }
        ?>
    </table>
    <br><br>
    <center>
        <a href="index.php">Go Back</a>
    </center>
</body>
</html>
