<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mario Party Survey</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
<body>

<section class="mario-survey">
        
<?php
/* https://clientside-dancingfloie.c9users.io/phpmyadmin */
$servername = getenv('clientside-dancingfloie.c9users.io');
$username = 'dancingfloie';
$password = "";
$database = "c9";
$dbport = 3306;
$dbname = "project2";

$db = new mysqli($servername, $username, $password, $database, $dbport);

if ($db->connect_error) {
	die("Connection Failed: " . $db->connect_error);
}
        
echo ("Connected Sucessfully: " . $db->host_info);
        
mysqli_select_db($db, $dbname);

		//Table
		if (empty($result)) {
            $sql = "CREATE TABLE MarioParty(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                q1_options VARCHAR(100),
                q2_options VARCHAR(100),
                q3_options VARCHAR(100),
                q4_options VARCHAR(100),
                q5_options VARCHAR(100)
                )";
                
        if ($db->query($sql) === TRUE) {
            print_r("<br>Table MarioParty was created successfully.");    
        } else {
            print_r("<br>There was an error creating the table: " . $db->error);   
        }
        
		}

		$q1_options = $_POST['q1_options'];
		$q2_options = $_POST['q2_options'];
		$q3_options = $_POST['q3_options'];
		$q4_options = $_POST['q4_options'];
		$q5_options = $_POST['q5_options'];

		$mario_insert = "INSERT INTO MarioParty (q1_options, q2_options, q3_options, q4_options, q5_options) VALUES ('$q1_options', '$q2_options', '$q3_options', '$q4_options', '$q5_options')";

		if (mysqli_query($db, $mario_insert)) {
            print_r("<br>Record added successfully.");    
        } else {
            print_r("<br>Error: " . mysqli_error($db));
        }
        
        print_r("<h1>Mario Party Results</h1>");

        $sql = "SELECT q1_options, q2_options, q3_options, q4_options, q5_options FROM MarioParty";
        $marioresult = $db->query($sql);

        if ($marioresult->num_rows > 0) {
            
        while ($row = $marioresult->fetch_assoc()) {
            echo "Guest ID: " . $row["id"] . "<br>Question 1 Choice: " . $row["q1_options"] . " " . "<br>Question 2 Choice: " . $row["q2_options"] . "<br>Question 3 Choice: " . $row["q3_options"] . "<br>Question 4 Choice: " . $row["q4_options"] . "<br>Question 5 Choice: " . $row["q5_options"] . "<br><br>" ;
            }
            
            } else {
                print_r("<br>No results to display. ");
            }

		$db->close();
		?>

		</section>

		<script src="js/main.js"></script>
    </body>
</html>