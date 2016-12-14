<?php 
/* https://clientside-dancingfloie.c9users.io/phpmyadmin */
$servername = getenv('clientside-dancingfloie.c9users.io');
$username = 'dancingfloie';
$password = "";
$database = "c9";
$dbport = 3306;
$dbname = "project3";

$db = new mysqli($servername, $username, $password, $database, $dbport);

if ($db->connect_error) {
	die("<p class='adminhide'>Connection Failed: " . $db->connect_error . "</p>");
}
        
echo ("<p class='adminhide'>Connected Sucessfully: " . $db->host_info . "</p>");
        
mysqli_select_db($db, $dbname);

		//Table
		if (empty($result)) {
            $sql = "CREATE TABLE MyNotes(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                note_name VARCHAR(40),
                new_note VARCHAR(5000)
                )";
                
        if ($db->query($sql) === TRUE) {
            print_r("<p class='adminhide'>Table MyNotes was created successfully.</p>");    
        } else {
            print_r("<p class='adminhide'>There was an error creating the table: " . $db->error  . "</p>");   
        }
        
		}

	
		?>