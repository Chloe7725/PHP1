<?php
require '../Classes/DbConfig.php';

$melding = "";
if(isset($_POST['submit'])){
    require '../Classes/User.php';
    $user = new User();
    $melding = $user->addUser($_POST);

    echo $melding;
}