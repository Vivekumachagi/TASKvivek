<?php
class Read extends Database
{
    public function readall()
    {
        if (isset($_POST['showall'])) {
            $this->query("select * from usertweet");
            $values = $this->resultSet();
            return $values;
        }
    }
    public function readone()
    {
        $email = $_POST['email'];
        $this->query("select name,email,password from userdetail where email='$email'");
        return $this->single();
    }
    public function yourcom()
    {
        $email = $_SESSION['email'];
        $this->query("select * from usertweet where name = '$email'");
        $values = $this->single();
        return $values;
    }
}
