
 <?php session_start();?>

<h1>Connexion</h1>  

<div class="container-fluid">
		<div class="row main-content text-center">
			<div class="col-md-4 text-center company__info bg-primary  bg-opacity-75">
				<span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<h4 class="company_title">Your Company Logo</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form action="" method="POST"  class="form-group">
							<div class="row">
								<input type="email" name="email" id="email" class="form__input" placeholder="Email">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							
							<div class="row">
                            
								<button type="submit"  href="<?php if(!empty($checkAccount)){echo 'index.php?page=profiles';} ?>"  class="btn">Se connecter</button>
							</div>
						</form>
					</div>
					<div class="row">
						<p>Pas de compte? <a href="index.php?page=signUp">S'enregistrer ici!</a></p>
					</div>
                    <?php 
					if(isset($maSession)){
						var_dump($maSession['profile_lastname']);
					}
                    ?>
				</div>
			</div>
		</div>
	</div>