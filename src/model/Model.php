<?php

class  Model
{

    private $db;
    
  public function __construct(){
    $host="localhost";
    $dbName="love_me";
    $root="root";
    $password="";

    try {
        $this->db=new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",$root,$password,array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        var_dump($e->getMessage());
    }
  }

  public function addProfil($firstname,$lastname,$pseudo,$email,$password,$dob,$gender,$hobbies){

    try {
    
      $addProfileRequest=$this->db->prepare("INSERT INTO profile_registration (profile_firstname,profile_lastname,profile_pseudo,profile_email,profile_password,profile_dob,profile_gender,profile_hobbies) VALUES (?,?,?,?,?,?,?,?)");
      $addProfileRequest->execute([
        $firstname,
        $lastname,
        $pseudo,
        $email,
        $password,
        $dob,
        $gender,
        $hobbies   
      ]);
      return true;
    } catch (Exception $e) {
      var_dump($e->getMessage());
      return false;
    }
  }

  public function checkConnexion($email,$password){

    try {
      $checkConnexionRequest=$this->db->prepare("SELECT * FROM profile_registration WHERE profile_email=? AND profile_password=?");
      $checkConnexionRequest->execute([
        $email,
        $password
      ]);
      $user=$checkConnexionRequest->fetch();
      return $user;
    } catch (Exception $e) {
      var_dump($e->getMessage());
      return false;
    }
  }

  public function toListProfiles(){
    try {
      $allProfileRequest=$this->db->prepare("SELECT * FROM profile_registration");
      $allProfileRequest->execute([
      ]);
      $allProfiles=$allProfileRequest->fetchAll();
      return $allProfiles;
    } catch (Exception $e) {
      var_dump($e->getMessage());
    }
  }

  public function toListProfilesByCriteria($sexe,$hobbies){
    try {
      $getProfileRequestByCriteria=$this->db->prepare("SELECT * FROM profile_registration WHERE profile_gender=? AND profile_hobbies=?");
      $getProfileRequestByCriteria->execute([
        $sexe,
        $hobbies
      ]);
      return $getProfileRequestByCriteria->fetchAll();
    } catch (Exception $e) {
      var_dump($e->getMessage());
    }
  }

  public function toListAProfile($id){
    try {
      $getAProfileRequest=$this->db->prepare('SELECT * FROM profile_registration WHERE profile_id=? ');
      $getAProfileRequest->execute([
        $id
      ]);
      return $getAProfileRequest->fetch();
      
    } catch (Exception $e) {
     var_dump($e->getMessage()); 
    }
  }

  
    
}