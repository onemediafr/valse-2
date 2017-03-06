<?php
if (!empty($_POST) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	require 'db-connect.php';
	$req = $pdo->prepare("INSERT INTO lvb_newsletter (email) VALUES (?)");
	$req->execute(array($_POST['email']));
	$req->closeCursor();
	header('location:index.php');
} else {
	header('location:index.php');
}