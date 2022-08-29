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

}
