<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../Models/class.User.php');


if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'RegistrationForm':
            $user = new User(0, 'Frank', 'American', 'email@email.com', 'password');
            $user->insert($dbc);  // done!
            break;

        case 'GetLoginForm':
            $view = getView('user', 'login');
            echo $view;
            break;

        case 'GetCreateAcountForm':
            $view = getView('user', 'registration');
            echo $view;
            break;


        default:
            echo "Never Mind";

    endswitch;
}

?>
