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
    <h1 class="text-center my-4"> Enter Student Details</h1>

    <div class="container my-4 p-4 shadow">
            <form action="" method="post" enctype="multipart/form-data" class="form">
        <div class="mb-3">
            <label for="stdName">Enter Your Name</label>
            <input type="text" id="stdName" class="form-control">
        </div>
        <div class="mb-3">
            <label for="stdId">Enter Your Id</label>
            <input type="text" id="stdId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="stdEmail">Enter Your Email</label>
            <input type="email" id="stdEmail" class="form-control">
        </div>

        <input type="button" value="Add Data" class="btn btn-success insert">
                <input type="button" value="Read Data" class="btn btn-primary read">
            </form>
    </div>

    <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>ID</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="readdata">



                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ajax.js"></script>
</body>

</html>