<?php
$server ="localhost";
$username ="root";
$password = "";

$con = mysqli_connect($server, $username, $password , 'travel-form');
if(!$con){
    die("connection failed due to" . mysqli_connect_error());

}
echo"success connecting to db";
$name = $_POST['name'];
$gender = $_POST['gender'];;
$phone= $_POST['phone'];
$email= $_POST['email'];
$others= $_POST['others'];
$datetime= $_POST['datetime'];

echo "$name $gender $phone $email $others $datetime";
// $sql=  "INSERT INTO details ( 'name', 'gender', 'email', 'phone', 'others', 'datetimes') VALUES ( '$name', '$gender', '$email', '$phone', '$others', '$datetime'
// )";


$sql = "INSERT INTO details ( name, gender, email, phone, others, datetimes)
VALUES ('$name', '$gender', '$email', '$phone', '$others', '$datetime')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


// if (mysqli_query($con, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
//   }


?>