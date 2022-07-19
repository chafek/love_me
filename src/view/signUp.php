<?php session_start();?>

<h1>inscription</h1>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Bienvenue</h3>
            <p>Enregistrez votre profil afin de faire des rencontres </p>
            <a class="btn btn-primary" href="http://localhost/loveMe/index.php?page=signIn" role="button">Login</a>
            
        </div>
        <div class="col-md-9 register-right">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li> -->
            <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="" role="tab" aria-controls="profile" aria-selected="false">nouveau profil</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Saisir un profil</h3>
            <form action="" method="post">
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="First Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="pseudo" class="form-control"  placeholder="Pseudo" value="" />
                        </div>
                        <div class="form-group">
                            <div class="maxl">
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="h" checked>
                                    <span> Homme</span> 
                                </label>
                                <label class="radio inline"> 
                                    <input type="radio" name="gender" value="f">
                                    <span>femme </span> 
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="date" name="dob"   class="form-control" placeholder="Your Phone " value="" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="hobbies[]" multiple="multiple" size="2">
                                <option class="hidden"  selected disabled>Selectionnez vos hobbies</option>
                                <option>Sport</option>
                                <option>Lecture</option>
                                <option>Informatique</option>
                                <option>Voyage</option>
                                <option>Art martiaux</option>
                            </select>
                            </div>
                                <button class="btn btn-primary btn-lg mt-4" type="submit">Enregistrer</button>  
                            </div>
                        </div>
            </form>
            </div>
                           
                            <!-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div> -->
            </div>
        </div>
        </div>

    </div>