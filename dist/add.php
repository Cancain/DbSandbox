<?php include 'inc/header.php' ?>
<?php include 'inc/addUserController.php' ?>

<div class="box2">
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <span><?php echo $msg ?></span>
    <div class="formControl">
      <input class="input" type="text" name="name" placeholder="Name"
      value="<?php if(isset($email)) echo $name ?>"/>
      <span class="errorMsg"><?php echo $nameErrMsg ?></span>
    </div>
    <div class="formControl">
      <input type="text" class="input" name="email" placeholder="Email"
      value="<?php if(isset($email)) echo $email ?>"/>
      <span class="errorMsg"><?php echo $emailErrMsg ?></span>
    </div>
    <div class="formControl">
      <textarea class="input" placeholder="Comment" name="comment" cols="30" rows="10"><?php if(isset($comment)) echo $comment?></textarea>
    </div>
    <input class="btn" type="submit" name="submit" value="Send">
  </form>
</div>

<?php include 'inc/footer.php' ?>
