<?php

require ('src/controllers/HomeController.php');
require ('src/controllers/SignInController.php');
require ('src/controllers/SignUpController.php');
require ('src/controllers/ProfilesController.php');
require ('src/controllers/DetailController.php');
require ('src/model/Model.php');

$page=filter_input(INPUT_GET,'page');

$router=[
    'home'=>Home::class,
    'signIn'=>SignIn::class,
    'signUp'=>SignUp::class,
    'profiles'=>Profiles::class,
    'detail'=>Detail::class
];

foreach ($router as $routerKey => $routerClass) {
    if($page===$routerKey){
        $controller=new $routerClass;
        $controller->manage();
        break;
    }
}
    if (!isset($controller)) {
        $controller=new Home;
        $controller->manage();
    }

