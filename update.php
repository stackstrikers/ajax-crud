<?php
$conn = mysqli_connect("localhost", "root", "", "crudapp");

$userId = $_GET['userId'];

$select = "SELECT * FROM ajaxcrud WHERE serial= $userId";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>CRUD</title>
</head>

<body>
    <h1 class="text-center my-4"> Edit Student Details</h1>

    <div class="container my-4 p-4 shadow">
            <form action="" method="GET" enctype="multipart/form-data" class="form">
        <div class="mb-3">
            <label for="stdName">Enter Your Name</label>
            <input type="text" id="ustdName" class="form-control" value="<?php echo $row['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="stdId">Enter Your Id</label>
            <input type="text" id="ustdId" class="form-control" value="<?php echo $row['id']; ?>">
        </div>
        <div class="mb-3">
            <label for="stdEmail">Enter Your Email</label>
            <input type="email" id="ustdEmail" class="form-control" value="<?php echo $row['email']; ?>">
        </div>

        <input type="button" value="Update Data" class="btn btn-success edit" onclick="UpdateData(<?php echo $row['serial']; ?>);">
                <input type="button" value="Read Data" class="btn btn-primary read">
            </form>
    </div>