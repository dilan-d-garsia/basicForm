<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$message = $_POST['message'];

echo $name;
echo $contact_number;

$link= mysqli_connect("localhost", "root","","assignment_3");
if($link==false)
{
    die("Error: could not connect". mysqli_connect_error());

}
$sql = "INSERT INTO information (name, email, contact_number, message) VALUES ('$name', '$email', '$contact_number', '$message')";
if (mysqli_query($link, $sql)){
    echo "Save successful";
}
else {
    echo "Error". mysqli_error($link);
}
mysqli_close($link);
?>