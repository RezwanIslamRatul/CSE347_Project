<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating Info</title>
    <style>
        button {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body background="zbg.jpg" style="background-repeat:no-repeat;background-size:100% ">
    <button><a href="logout.php">Logout</a></button>
    <br>
    <h2>Seat-Availability Update</h2>
    <center>
        <form action="" method="POST">
            <input type="number" name="metroid" placeholder="Enter Metro ID" required />
            <input type="number" name="seat_availability" placeholder="Enter New Seat Amount" required />
            <input type="text" name="schedule" placeholder="Enter New Schedule" />
            <input type="submit" name="update" value="UPDATE DATA">
        </form>    
    </center>

    <?php
    $connection = mysqli_connect("localhost", "root", "", "metrorail_php");

    if (isset($_POST['update'])) {
        $id = $_POST['metroid'];
        $seat_availability = $_POST['seat_availability'];
        $schedule = $_POST['schedule'];

        $query = "UPDATE metroinformation SET seat_availability='$seat_availability', schedule='$schedule' WHERE metroid='$id'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo "<center>Updated!</center>";
        } else {
            echo "<center>Not Updated!</center>";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Information</title>
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
<body background="papers.co-sf45-blue-blue-blue-gradation-blur-29-wallpaper.jpg" style="background-repeat:no-repeat;background-size:100% ">
    <div class="heading">
        <br><center><h1>Metro Information</h1></center>
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
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "metrorail_php";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $search_query = "SELECT * FROM metroinformation";
        $result = $conn->query($search_query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['metroid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['seat_availability'] . "</td><td>" . $row['schedule'] . "</td><td>" . $row['route'] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
