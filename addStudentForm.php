<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "classassignment1was";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$name = $_POST["name"];
$matricNo = $_POST["matricNo"];
$currentAddress = $_POST["currAdd"];
$homeAddress = $_POST["homeAdd"];
$email = $_POST["email"];
$mobilePhone = $_POST["mobilePhone"];
$homePhone = $_POST["homePhone"];

//Matric number check.
$matNoCheck = strlen((string)$matricNo);
if ($matNoCheck >7)
{
    die("Matric Number does not follow the format.");
}
//Name check for upppercase and lowercase.
$namecheck1 = (preg_match('/[A-Z]+/', $name) && preg_match('/[a-z]+/', $name));
if($namecheck1==0)
{
    die ("Name does not match format.");
}
//Name check for number in name.
$namecheck2 = preg_match('/[\d!$%^&]+/', $name);
if ($namecheck2==1)
{
    die("Name does not match format.");
}

//Email validation
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    die ("Email is not valid.");
}



$sql = "INSERT INTO studentdetails (STUDNAME, MATRIC_NO, CURRENT_ADDRESS, HOME_ADDRESS, EMAIL, MOBILE_PHONE, HOME_PHONE)
VALUES ('$name', '$matricNo', '$currentAddress', '$homeAddress', '$email', '$mobilePhone', '$homePhone')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();

?>