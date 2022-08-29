<?php
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
    //var_dump($val);
    // // $this->view('pages/about', $val);
    $data = [
      'posts' => $post
    ];
    $this->view('pages/displayone', $data);
    //  var_dump($val);
  }
  public function signin()
  {
    $this->view('pages/login');
  }
  public function getdata()
  {
    $models = $this->model('read');
    $post = $models->readone();
    
    if(($post->email == $_POST['email'] )&& ($post->password == $_POST['password']))
    {
      echo "data matched succesfully";
    }

    else 
    {
      echo "incorrect user detail";
    }
    

    
  }
}
