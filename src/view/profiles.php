<!-- <?php session_start();?> -->

<h1>Liste des profils</h1>
<form action="index.php?page=profiles" method="post">
<div class="row">
  <div class="col-3">
    <select class="form-select" aria-label="Default select example " name="sexe">
        <option value="" selected>Selection du genre</option>
        <option value="h">Hommes</option>
        <option value="f">Femmes</option>
    </select>   
  </div>
  <div class="col-4">
  <select class="form-select" aria-label="Default select example" name="hobbies">
        <option value="" selected>Selection des hobbies</option>
        <option value="sport">sport</option>
        <option value="lecture">lecture</option>
        <option value="informatique">informatique</option>
    </select>  
  </div>
  <div class="col-3">
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Date</span>
  <input type="month" name="year" id="mydate" class="form-control" aria-describedby="basic-addon1" >
  </div>
</div>
<div class="col-2">
 

<button type="submit" class="btn btn-primary" style="margin-top:0;">Valider</button>

</div>
</form>

<?php 
  var_dump($profilesByCriteria);
?>
<!--<div class="container d-flex flex-row mb-5 mt-5">
<div class=" ">
<form action="" method="get">
<select  class="form-select " name="gender" size="3" aria-label="size 3 select example">
  <option selected>selection par genre</option>
  <option value="h">homme</option>
  <option value="f">femme</option>
</select>

<select width="100" name="hobbies" class="form-select " size="3" aria-label="size 3 select example">
  <option selected>selection par hobbies</option>
  <option value="sport">sport</option>
  <option value="lecture">lecture</option>
  <option value="Informatique">Informatique</option>
</select>

<input type="month" name="year" id="" class="mb-4">


<button class="btn btn-success" type="submit">valider</button>
</form>
</div>

 <div class=" ">
<form action="" method="get">
<select width="100" name="hobbies" class="form-select " size="3" aria-label="size 3 select example">
  <option selected>selection par hobbies</option>
  <option value="sport">sport</option>
  <option value="lecture">lecture</option>
  <option value="Informatique">Informatique</option>
</select>
<button class="btn btn-success" type="submit">valider</button>
</form>
</div>
<div class="">
<form action="" method="get">
    <input type="month" name="year" id="" class="mb-4">
<button class="btn btn-success mt-5" type="submit">valider</button>
</form>
</div> -->

</div>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Genre</td>
            <td>Date de création du profil</td>
        </tr>
    </thead>
    <tbody>
    <?php  for ($i=0; $i <count($allProfiles) ; $i++) { 
     echo "<tr>
                <td><a href='index.php?page=detail&id={$allProfiles[$i]['profile_id']}'>{$allProfiles[$i]['profile_firstname']}</a></td>
                <td>{$allProfiles[$i]['profile_lastname']}</td>
                <td>{$allProfiles[$i]['profile_gender']}</td>
                <td>{$allProfiles[$i]['profile_date_creation']}</td>
     
        </tr>";
    }?>
       
    </tbody>
</table>