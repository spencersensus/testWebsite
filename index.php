<!DOCTYPE html>
<html>

<head>
  <link href="HomeStyle.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <title></title>
</head>

<body>
<?php
session_start();

class testing{
  public function saveComment(){
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
}

}
if(isset($_POST['subContact']))
{
    $y = new testing();
    $y -> saveComment();
}


?>
<p>HELLO WORLD </p>
<div class = "ContactContainer" id = "ContactContainer">
    <form class = "signUp" action="index.php" style="border:1px solid #ccc" method = "post">
                <div class="container2" id = "container">
                  <hr>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" id = "user" placeholder="Enter Email" name="email" required>
              
                  <label for="phone"><b>Phone Number></label>
                  <input type="text" id = "phone" placeholder="Enter Phone Number" name="phone" required>
              
                  <label for="comm"><b>Comment</b></label>
                  <input type="text" id = "comment" placeholder="Comment" name="comm" required>
              
                  <div class="clearfix">
                    <button type="submit" class="signupbtn" name = "subContact">TestConn</button>
                  </div>
                </div>
              </form>
</div>

</body>
</html>