<?php

class LoginPage {

public function __construct( $urlArr ) 
{ 
    $user = new UserController();

    if (isset($_POST['submit'])) {
        $user->login_user($_POST);
    }
}


}

?>