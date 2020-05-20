<?php

class RegisterPage {

public function __construct( $urlArr ) 
{ 
    //var_dump($_POST); exit;
    $user = new UserController();

    if (isset($_POST['submit'])) {
        $user->register_user($_POST);
    }
}


}

?>