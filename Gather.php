<DOCTYPE html>
<html>

<head>
  <link href="HomeStyle.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <title></title>
</head>
<?php
$servername = "localhost";
    $username = "webserver";
    $password = "vya8bD?r%+4fQRYP>v";
    $dbname = "candidate_woodss";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
   else{
        echo "Success!";
        }
        $sql = "CREATE TABLE MovieInfo (
        Certification VARCHAR(30) NOT NULL  PRIMARY KEY, 
        PrimaryReleaseYear INT(4) NOT NULL,
        Genre VARCHAR(30) NOT NULL
        )";   

        if ($conn->query($sql) === TRUE) {
                echo "Table MovieInfo created successfully";
        } else {
                echo "Error creating table: " . $conn->error;
}
?>