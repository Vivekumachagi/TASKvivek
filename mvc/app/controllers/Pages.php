<?php
session_start();
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $data = [
      'title' => 'TraversyMVC',
    ];
    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];
    $this->view('pages/about', $data);
  }

  public function insrt()
  {
    $models = $this->model('Upload');
    $models->signup();
    echo "signup succesfully done";
  }

  public function read()
  {
    $models = $this->model('read');
    $post = $models->readall();
    $data = [
      'posts' => $post
    ];
    $this->view('pages/displayone', $data);
  }
  public function signin()
  {
    $this->view('pages/login');
  }
  public function getdata()
  {

    $models = $this->model('read');
    $post = $models->readone();
    if ($post) {
      if (($post->email == $_POST['email']) && ($post->password == $_POST['password'])) {
        echo "data matched succesfully";
        $data = [
          'posts' => $post
        ];
        $_SESSION["username"] = $post->name;
        $_SESSION['email'] = $post->email;
        // $this->view('pages/Userview', $data);
        header("location: http://localhost/mvc/Pages/userv");
        exit();
      } else {
        echo "incorrect user detail";
      }
    } else {
      echo "user not found";
    }
  }
  public function userv()
  {
    $this->view('pages/Userview');
  } 
  public function signout()
  {
    echo "thankyou for using twitter " . $_SESSION["username"];
    session_unset();
    session_destroy();
    $this->view('pages/login');
  }
  public function display()
  {
    $this->view('pages/display');

  }
  public function postandfetchcomment()
  {
   
    if (isset($_POST['tweet'])) {

      $models = $this->model('Upload');
      $models->insertcomment();
      $this->view('pages/Userview');
    } else if (isset($_POST['showall'])) {
      $models = $this->model('read');
      $values = $models->readall();
      $data = [
        'posts' => $values
      ];
      $this->view('pages/display', $data);
    } else if (isset($_POST['yourcom'])) {
      $models = $this->model('read');
      $values = $models->yourcom();
      $data = [
        'posts' => $values
      ];
      $this->view('pages/displayone', $data);
    }
    else
    {
     header("location: http://localhost/mvc/Pages/userv");
        exit();
    }
  }
}
