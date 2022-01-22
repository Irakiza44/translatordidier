<?php
        $firstname = filter_input(INPUT_POST, 'firstname');
        $lastname = filter_input(INPUT_POST, 'lastname');
        $email = filter_input(INPUT_POST, 'email');
        $phonenumber = filter_input(INPUT_POST, 'phonenumber');
        $password = filter_input(INPUT_POST, 'password');
         
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hindura";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO indimi(kinya, fra, eng , swa) values ('$firstname' ,'$lastname' ,'$email' ,'$phonenumber')";
if ($conn->query($sql)){ 
echo "New Word Inserted, So Click On Back Row at The Top Of The Page";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}