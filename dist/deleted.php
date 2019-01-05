<?php include 'inc/header.php' ?>
<?php
require 'config/db.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$id = $_GET['deleteId'];

$query = "DELETE FROM users WHERE id=$id";

$result = mysqli_query($connection, $query);
?>
<div class="box2"><?php echo "Deleted user ". htmlspecialchars($_GET['deleteName']) ?></div>
<?php include 'inc/footer.php' ?>