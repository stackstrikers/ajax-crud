<?php
$conn = mysqli_connect("localhost", "root", "", "crudapp");

$select = "SELECT * FROM ajaxcrud";
$query = mysqli_query($conn, $select);


while ($fetchedData = mysqli_fetch_assoc($query)){ ?>
    <tr>
        <td> <?php echo $fetchedData['serial']; ?></td>
        <td> <?php echo $fetchedData['name']; ?></td>
        <td> <?php echo $fetchedData['id']; ?></td>
        <td> <?php echo $fetchedData['email']; ?></td>
        <td>
            <button onclick="Update(<?php echo $fetchedData['serial']; ?>)" class="btn btn-primary">Edit</button>
            <button onclick="Delete(<?php echo $fetchedData['serial']; ?>)" class="btn btn-danger">Delete</button>
        </td>
    </tr>
<?php } ?>