<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="form">
<form action="<?php echo URLROOT . 'Pages/getdata' ?>" method="post">
 <label>Email:</label><input type="email" name="email" required>
 <label>Password:</label><input type="password" name="password" required>
 <label>submit to login :</label><input type="submit" name="signup">
</form>
</div>
<p></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>