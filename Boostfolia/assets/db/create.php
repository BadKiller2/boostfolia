<?php

require_once 'connect.php';


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$text = $_POST['text'];
	$user = R::dispense('users');
    $user->name = $name;
    $user->email = $email;
    $user->text = $text;
    R::store($user);
    header('location: /');
}

?>