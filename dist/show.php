<?php include 'inc/header.php' ?>
<?php 
require 'config/db.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = 'SELECT * FROM users ORDER BY id DESC';

$result = mysqli_query($connection, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo mysqli_error($connection);


?>

<div class="box2">
<?php $i = 1;
foreach($users as $user): ?>
    <h1><a href="#" id="<?php echo 'user'.$i ?>" 
    class="collapseBtn ">
        <?php echo htmlspecialchars($user['name']) ?></a></h1>
    <div id="<?php echo 'collapse'.$i ?>" class="collapse" >
        <p><?php echo htmlspecialchars($user['email']) ?></p>
        <p><?php echo htmlspecialchars($user['comment']) ?></p>
    </div>
<?php $i++;
 endforeach; ?>

</div>

<script src="js/collapseController.js"></script>
<?php include 'inc/footer.php' ?>
