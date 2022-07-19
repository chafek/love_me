

<h1>Detail du profil</h1>

<div class="card bg-primary" style="width: 35rem;">
  
  <div class="card-body">
    <h5 class="card-title"><?= $profileSelected['profile_lastname']." ".$profileSelected['profile_firstname'];?></h5>
    <p>email:<?= $profileSelected['profile_email']?></p>
    <p>date de naissance:<?= $profileSelected['profile_dob']?></p>

    <p class="card-text">hobbies<?= $profileSelected['profile_hobbies']?></p>
    <a href="index.php?page=home" class="btn btn-primary">retour à l'acceuil</a>
  </div>
</div>