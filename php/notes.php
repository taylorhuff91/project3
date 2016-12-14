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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
    </head>
<body>

<section class="my-notes">

<a href="../index.html">Home</a>
        
<?php

        print_r("<h1>My Notes</h1>");

        $sql = "SELECT note_name, new_note FROM MyNotes";
        $noteresult = $db->query($sql);

        if ($noteresult->num_rows > 0) {
            
        while ($row = $noteresult->fetch_assoc()) {
            echo $row["id"] . "<h3 class='note-heading'>" . $row["note_name"] . "</h3>" . "<button class='slidetoggle'>Hide/Show Note Body". "</button>" . "<div class='toggle'><p class='note-body'>" . $row["new_note"] . "</p></div><br><br>" ;
            }
            
            } else {
                print_r("<br>No results to display. ");
            }

		$db->close();
		?>

		</section>

		<script src="../js/main.js"></script>
    </body>
</html>