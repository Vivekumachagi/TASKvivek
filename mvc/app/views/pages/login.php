<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="form">
    <form action="<?php echo URLROOT . 'Pages/getdata' ?>" method="post">
    <h2>Login</h2>
        <label>Email:</label><input type="email" name="email">
        <label>Password:</label><input type="password" name="password">
        <input type="submit" name="signup" value="login" id="input">
    </form>
</div>
<p></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>