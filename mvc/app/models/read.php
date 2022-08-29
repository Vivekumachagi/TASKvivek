<?php
class Read extends Database
{
    public function readall()
    {
        if (isset($_POST['showall'])) {
            echo "working print all";
            $this->query("select * from text");
            $values = $this->resultSet();
            return $values;
        }
    }
    public function readone()
    {
        $email = $_POST['email'];
        $password =$_POST['password'];
        $this->query("select email,password from userdetail where email='$email'");
        return $val = $this->single();
    }
   
}
