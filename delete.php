<?php
$conn = mysqli_connect("localhost", "root", "", "crudapp");

$userId = $_POST['userId'];

$delete = "DELETE FROM ajaxcrud WHERE serial= $userId";
$query = mysqli_query($conn, $delete);
if ($query){
    echo "Delete Successful";
}
else {
    echo "Could not Delete";
}