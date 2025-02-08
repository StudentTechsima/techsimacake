<?php
$conn = mysqli_connect('localhost','root','','cakeshop');

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
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "insert into contact(name, email, message) values ('$name','$email','$message')";
        if(mysqli_query($conn, $sql)){
            echo "
            <script>
                alert('Contact successfully !');
                window.location.href = 'Read_contact.php';
            </script>
          ";
        }
    }
}
