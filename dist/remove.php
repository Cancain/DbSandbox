<?php include 'inc/header.php' ?>
<?php 
require 'config/db.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = 'SELECT * FROM users ORDER BY id DESC';

$result = mysqli_query($connection, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<div class="box2">
<?php $i = 1;
foreach($users as $user): ?>
<form action="deleted.php" method="get">
    <label class="deleteUser" ><?php echo htmlspecialchars($user['name'])?></label>
    <input class="deleteBtn" type="submit" value="Remove">
    <input type="hidden" name="deleteId" value=" <?php echo htmlspecialchars($user['id']) ?>">
    <input type="hidden" name="deleteName" value=" <?php echo htmlspecialchars($user['name']) ?>">
    
</form>

<?php $i++;
 endforeach; ?>

</div>

<?php include 'inc/footer.php' ?>
