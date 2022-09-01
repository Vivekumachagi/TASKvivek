<?php
class Upload extends Database
{
    public function signup()
    {
      
        $name=$_POST['name'];
        $date=$_POST['date'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
    
          $this->query("insert into userdetail (name, dob, email, phone, password) values('$name','$date','$email', '$phone','$password')");
          return $this->execute();
    }
    public function insertcomment()
    {
        session_start();
        $email = $_SESSION['email'];
        $about= $_POST['cabt'];
        $comment = $_POST['cmt'];
        $this->query("insert into usertweet (name, about, tweet) values('$email', '$about', '$comment')");
        return $this->execute();

    }

}
