<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">
<div class="form">

  
  <form action="<?php echo URLROOT . 'Pages/insrt' ?>" method="post" class="frm">
  <div class="imgs">
    <img src="https://www.iconpacks.net/icons/2/free-twitter-logo-icon-2429-thumb.png" alt="img not foung">
    <h2>WELCOME TO TWITTER</h2>

  </div>
    <label>Name :</label> <input type="text" name="name" required>
    <label>DOB :</label> <input type="date" name="date">
    <label>Email:</label><input type="email" name="email" required>
    <label>Phone:</label><input type="text" name="phone">
    <label>Password:</label><input type="password" name="password" required>
    <label>submit to signup :</label><input type="submit" name="signup">
    <a href="<?php echo URLROOT . 'Pages/signin' ?>">if have account</a>
  </form>
</div>
<p></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>