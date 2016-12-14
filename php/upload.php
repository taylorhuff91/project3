<?php include_once 'dbconnect.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Notes</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Bad+Script|Oxygen:300,700" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="../css/style.css" />
    </head>
<body>

<section class="my-notes">

<a href="../index.html">Home</a>

<?php 
/* https://clientside-dancingfloie.c9users.io/phpmyadmin */
        
		$note_name = $_POST['note_name'];
		$new_note = $_POST['new_note'];

		$notes_insert = "INSERT INTO MyNotes (note_name, new_note) VALUES ('$note_name', '$new_note')";

		if (mysqli_query($db, $notes_insert)) {
            print_r("<br><p>Your note has been saved to My Notes!</p>");    
        } else {
            print_r("<br>Error: " . mysqli_error($db));
        }

		$db->close();
		?>
		
		</section>
		</body>
		</html>