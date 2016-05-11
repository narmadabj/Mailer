<?php
session_start();
function get_app_path()
{
	$path = APP_PATH', 'http://marketebizz.com/mailer/startbootstrap-sb-admin-1.0.4/');
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

function app_config($config)
{
switch ($config) {
    case "version":
        return CURRENT_VERSION;
    break;
    case "version_latest":
        if (isset($_SESSION["version_latest"])) return $_SESSION["version_latest"];
        else return;
        break;
		
    case "cookie_domain":
        return COOKIE_DOMAIN;
        break;
		
    case "path":
        return APP_PATH;
        break;
    case "s3_key":
		$config = mysqli_query($con,"SELECT s3_key FROM login");
		$s3_key = mysqli_num_rows($config);
        if (isset($_SESSION["s3_key"])) return $_SESSION["s3_key"];
        else return;
        break;
    case "s3_secret":
		$config = mysqli_query($con,"SELECT s3_secret FROM login");
		$s3_secret = mysqli_num_rows($config);
        if (isset($_SESSION["s3_key"])) return $_SESSION["s3_secret"];
        else return;
        break;
    case "app":
        if (isset($_GET["i"]) && is_numeric($_GET["i"])) return $_GET["i"];
        else echo "<script type=\"text/javascript" > window . location = \"" . APP_PATH . "/logout\";</script>";
        break;
    case "userID":
        if (isset($_SESSION["userID"])) return $_SESSION["userID"];
        else return;
        break;
    case "name":
        if (isset($_SESSION["name"])) return $_SESSION["name"];
        else return;
        break;
   
    case "email":
        if (isset($_SESSION["email"])) return $_SESSION["email"];
        else return;
        break;
    case "password":
        if (isset($_SESSION["password"])) return $_SESSION["password"];
        else return;
        break;
    case "api_key":
        if (isset($_SESSION["api_key"])) return $_SESSION["api_key"];
        else return;
        break;
    case "is_sub_user":
        if (isset($_SESSION["is_sub_user"])) return $_SESSION["is_sub_user"];
        else return;
        break;
    case "main_userID":
        if (isset($_SESSION["tied_to"])) return $_SESSION["tied_to"];
        else return;
        break;
    case "restricted_to_app":
        if (isset($_SESSION["restricted_to_app"])) return $_SESSION["restricted_to_app"];
        else return;
        break;
    case "timezone":
        if (isset($_SESSION["timezone"])) return $_SESSION["timezone"];
        else return;
        break;
    case "language":
        if (isset($_SESSION["language"])) return $_SESSION["language"];
        else return;
        break;
    case "cron_sending":
        if ($_SESSION["cron"] == 1) return true;
        else return false;
        break;
    case "send_rate":
        if (isset($_SESSION["send_rate"])) return $_SESSION["send_rate"];
        else return;
        break;
    case "ses_endpoint":
        if (isset($_SESSION["ses_endpoint"])) return $_SESSION["ses_endpoint"];
        else return;
        break;
    case "ses_region":
        if (isset($_SESSION["ses_endpoint"]) && $_SESSION["ses_endpoint"] == "email.us-east-1.amazonaws.com") return "N. Virginia";
        else if (isset($_SESSION["ses_endpoint"]) && $_SESSION["ses_endpoint"] == "email.us-west-2.amazonaws.com") return "Oregon";
        else if (isset($_SESSION["ses_endpoint"]) && $_SESSION["ses_endpoint"] == "email.eu-west-1.amazonaws.com") return "Ireland";
        else if (!isset($_SESSION["ses_endpoint"])) return "No value";
        else return;
        break;
    }
}




?>


