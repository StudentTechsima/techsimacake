<?php
$conn = mysqli_connect('localhost', 'root', '', 'cakeshop');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from contact where id=$id";
    if(mysqli_query($conn, $sql)){
        echo "
        <script>
            alert('Deleted succesfully');
            window.location.href='Read_contact.php';
        </script>
      ";
    }
}else{
    header('Location:Read_contact.php');
}
?>
