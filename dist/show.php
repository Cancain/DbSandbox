<?php include 'inc/header.php' ?>
<?php 
require 'config/db.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = 'SELECT * FROM users';

$result = mysqli_query($connection, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="box2">
<?php foreach($users as $user): ?>
<h1><?php echo $user['name'] ?></h1>
<div class="collapse">
    <p><?php echo $user['email'] ?></p>
    <p><?php echo $user['comment'] ?></p>
</div>
<?php endforeach; ?>

</div>


<?php include 'inc/footer.php' ?>
