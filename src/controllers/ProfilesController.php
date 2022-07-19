<?php

class  Profiles
{
  public function __construct(){

  }

  public function manage(){
    $model=new Model();
    $allProfiles=$model->toListProfiles();
    $sexe=$_POST['sexe'];
    $hobbies=$_POST['hobbies'];
    $profilesByCriteria=$model->toListProfilesByCriteria($sexe,$hobbies);
  
    include 'src/view/include/header.php';
    include 'src/view/include/nav.php';
    include 'src/view/include/alertBox.php';
    include 'src/view/profiles.php';
    include 'src/view/include/footer.php';
  }
    
}