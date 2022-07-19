<?php

class SignIn
{
  public function __construct(){

  }

  public function manage(){
    $model=new Model;
    if(isset($_POST['email'])){
      if(empty($_POST['email'])||
        empty($_POST['password'])){
          echo 'merci de remplir tous les champs!';
        }else{
          $email=$_POST['email'];
          $password=$_POST['password'];
          $checkAccount=$model->checkConnexion($email,$password);
          if(!empty($checkAccount)){
            if(!isset($_SESSION['profiles'])){
            $_SESSION['profiles']=[];
            }
            array_push($_SESSION['profiles'],$checkAccount);
            $maSession= $_SESSION['profiles'][0];
            echo 'connexion établie';
          }else {
            echo 'email ou mot de passe  incorrect!';
          }
          
          
        }

        
    }

    include 'src/view/include/header.php';
    include 'src/view/include/nav.php';
    include 'src/view/include/alertBox.php';
    include 'src/view/signIn.php';
    include 'src/view/include/footer.php';
  }
    
}