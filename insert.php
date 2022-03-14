<?php
$conn = mysqli_connect("localhost", "root", "", "crudapp");
$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];

$insert = "INSERT INTO ajaxcrud(name,id,email) VALUE('$name','$id','$email')";
$query = mysqli_query($conn, $insert);
if ($query) {
    echo "Data Insert Successful";
} else {
    echo "Data Insert Failed";
}
