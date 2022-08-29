<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="form">
<form action="<?php echo URLROOT . 'Pages/insrt' ?>" method="post">
 <label>Name :</label> <input type="text" name="name" required>
 <label>DOB :</label> <input type="date" name="date" >
 <label>Email:</label><input type="email" name="email"required>
 <label>Phone:</label><input type="text" name="phone">
 <label>Password:</label><input type="password" name="password" required>
 <label>submit to signup :</label><input type="submit" name="signup">
  <a href="<?php echo URLROOT . 'Pages/signin' ?>">if have account</a>
</form>
</div>
<p></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>