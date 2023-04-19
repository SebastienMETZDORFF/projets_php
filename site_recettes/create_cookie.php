<?php
include_once('config/mysql.php');
include_once('variables.php');
include_once('functions.php');

// Validation du formulaire
if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if ($user['email'] === $_POST['email']
            && $user['password'] === $_POST['password']) {
            $loggedUser = [
                'email' => $user['email']
            ];

			// Cookie qui expire dans un an
			setcookie('LOGGED_USER',
				$loggedUser['email'],
				[
					'expires' => time() + 365*24*3600,
					'secure' => true,
					'httponly' => true
				]
			);

			$_SESSION['LOGGED_USER'] = $loggedUser['email'];
        } else {
            $errorMessage = sprintf("Les informations que vous avez envoyées ne permettent pas de vous identifier : (%s/%s)",
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}

// Si le cookie ou la session est présent
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
	$loggedUser = [
		'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER']
	];
}
