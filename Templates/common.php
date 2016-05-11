<?php
session_start();
function get_app_path()
{
	$path = define('APP_PATH', 'http://marketebizz.com/mailer/startbootstrap-sb-admin-1.0.4/');
	return $path; 
};

function get_app_user($userID)
{
if (isset($_SESSION["userID"])) return $_SESSION["userID"];
       else return;
}

function get_app_password($password)
{
if (isset($_SESSION["password"])) return $_SESSION["password"];
       else return;
}



?>


