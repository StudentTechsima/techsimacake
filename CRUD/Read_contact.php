<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ CONTACT DATA</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>

<body>

    <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'cakeshop');
                    $sql = "select * from contact";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res) > 0) {
                        while ($record = mysqli_fetch_assoc($res)) {


                    ?>
                            <tr>
                                <td><?= $record['id']?></td>
                                <td><?= $record['name']?></td>
                                <td><?= $record['email']?></td>
                                <td><?= $record['message']?></td>
                                <td>
                                    <a href="update_contact.php?id=<?= $record['id']?>" class="btn btn-primary btn-sm">Update</a>
                                    <a href="delete_contact.php?id=<?=$record['id']?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../JS/bootstrap.bundle.min.js"></script>

</body>

</html>