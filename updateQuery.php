<?php

$conn = mysqli_connect("localhost", "root", "", "crudapp");

$uname = $_POST['name'];
$uid = $_POST['id'];
$uemail = $_POST['email'];
$serialID = $_POST['userId'];

$update = "UPDATE ajaxcrud SET name ='$uname', id ='$uid', email ='$uemail' WHERE serial = $serialID";
$query = mysqli_query($conn, $update);
if ($query){
    echo "Data Updated Successfully";
}
else {
    echo "Updating Failed";
}


