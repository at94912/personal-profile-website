<?php
$conn = new mysqli("localhost","root","",);

// Check connection
if ($conn -> connect_errno) {
    die('Could not connect: ' . mysql_error());
}
// echo 'Connected successfully';


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$textareavalue = $_POST['content'];

$sql = "INSERT INTO 'databasename'.'tablename' (`name`, `email`, `subject`, `textarea`) VALUES ('$name','$email' ,'$subject',' $textareavalue')";
 
if ($conn->query($sql) === TRUE){
  echo "done";
}
else{
  echo "error" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>