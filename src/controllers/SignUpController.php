<?php

class  SignUp
{
  public function __construct(){

  }

  public function manage(){
    
    $model=new Model;
    
    if(isset($_POST['firstname'])){
      if (empty($_POST['firstname'])||
        empty($_POST['lastname'])||
        empty($_POST['password'])||
        empty($_POST['dob'])||
        empty($_POST['email'])) {
         echo"merci de renseigner tous les champs obligatoires!";
      }else{
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $pseudo=empty($_POST['pseudo'])?null:$_POST['pseudo'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $dob=empty($_POST['dob'])?null:$_POST['dob'];
        $gender=$_POST['gender'];
        $hobbies=empty($_POST['hobbies'])?null:implode(',',$_POST['hobbies']);
        $saveProfil=$model->addProfil($firstname,$lastname,$pseudo,$email,$password,$dob,$gender,$hobbies);
        // foreach ($hobbies as $key => $value) {
        //   echo $key.'=='.$value;
        // }
        // var_dump($hobbies);
      }
      
    }

    
    // var_dump($hobbies) ;
    include 'src/view/include/header.php';
    include 'src/view/include/nav.php';
    include 'src/view/include/alertBox.php';
    include 'src/view/signUp.php';
    include 'src/view/include/footer.php';
    
  }
    
}