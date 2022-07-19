<?php

class  Detail
{
  public function __construct(){

  }

  public function manage(){
    $model=new Model();
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $profileSelected=$model->toListAProfile($id);
      // var_dump( $profileSelected);
    }
    

    include 'src/view/include/header.php';
    include 'src/view/include/nav.php';
    include 'src/view/include/alertBox.php';
    include 'src/view/detail.php';
    include 'src/view/include/footer.php';
    
  }
    
}