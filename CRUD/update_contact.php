<?php
$conn = mysqli_connect('localhost', 'root', '', 'cakeshop');
// update queru heEre
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "
            <script>
                alert('name is required');
            </script>
          ";
    } elseif (empty($_POST['email'])) {
        echo "
            <script>
                alert('email is required');
            </script>
          ";
    } elseif (empty($_POST['message'])) {
        echo "
            <script>
                alert('message is required');
            </script>
          ";
    } else {
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "update contact set name='$name', email='$email', message='$message' where id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "
            <script>
                alert('Contact updated successfully !');
                window.location.href = 'Read_contact.php';
            </script>
          ";
        }
    }
}

// get into form code here
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contact where id=$id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $record = mysqli_fetch_assoc($res);

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Responsive Form</title>
            <link href="../CSS/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>

            <div class="container my-5">
                <h2>Update Contact</h2>
                <form method="post">
                    <input type="hidden" name="uid" value="<?= $record['id'] ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $record['name'] ?>" placeholder="Enter your name">
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $record['email'] ?>" placeholder="Enter your email">
                    </div>


                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your message"><?= $record['message'] ?></textarea>
                    </div>

                    <!-- Update Button --> <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

            <!-- Bootstrap JS -->
            <script src="../JS/bootstrap.bundle.min.js"></script>

        </body>

        </html>

<?php
    }
} else {
    header('Location:Read_contact.php');
}
?>