<?php if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/mvc/Pages/signin");
}
?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/userview.css">
<div class="form">
    <div class="iform">
        <form class="uform" action="<?php echo URLROOT . 'Pages/postandfetchcomment' ?>" method="post">
            <p>Welcone to twetter <?php echo $_SESSION['username'] ?></p>
            <label>about :</label> <input type="text" name="cabt">
            <label>comment :</label> <input type="text" class="com" name="cmt">
            <input type="submit" name="tweet" value="tweet">
            <input type="submit" name="showall" value="View recent comments">
            <input type="submit" name="yourcom" value="view your comment">
            <a href="<?php echo URLROOT . 'Pages/signout' ?>">logout</a>
        </form>
    </div>

</div>
<p></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>