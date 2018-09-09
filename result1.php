<!DOCTYPE html>
<html lang="th">
<head>
  <title>BIB ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
        <th>Sex</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
      </tr>
    </thead>
<?php
include("conn/myconn.php");
$sql = "SELECT* FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
?>
      <tr>
        <td><?php echo $row["userid"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["gender"];?></td>
	  </tr>   
 <?
    }
} else {
    echo "0 results";
}


$firstname =$lastname=$age= $gender =$message= $email =$id =$grade =$size=$mess= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname=test_input($_POST["lastname"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $message=test_input($_POST["message"]);
  $email=test_input($_POST["email"]);
  $id=test_input($_POST["id"]);
  $grade=test_input($_POST["grade"]);
  $size=test_input($_POST["size"]);
  $mess=test_input($_POST["mess"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo"<br>";
echo $age;
echo "<br>";
echo $gender;
echo "<br>";
echo $message;
echo "<br>";
echo $email;
echo "<br>";
echo $id;
echo "<br>";
echo $grade;
echo "<br>";
echo $size;
echo "<br>";
echo $mess;
echo "<br>";
//insert data
$sql = "INSERT INTO may (firstname,lastname,age,gender,message, email, id, grade, size,mess) 
VALUES ('$firstname', '$lastname', '$age', '$gender', '$message','$email','$id','$grade','$size','$mess')";

//echo $sql."<br>";



?>
</tbody>
</table>
</body>