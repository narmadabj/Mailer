<?php include('../functions.php');?>
<?php include('../login/auth.php');?>
<?php 
	//------------------------------------------------------//
	//                      	INIT                       //
	//------------------------------------------------------//
	
	$edit = isset($_GET['edit']) ? $_GET['edit'] : '';
	//$campaign_id = isset($_GET['c']) ? mysqli_real_escape_string($mysqli, $_GET['c']) : '';	
	$subject = addslashes(mysqli_real_escape_string($mysqli, $_POST['subject']));
	$from_name = mysqli_real_escape_string($mysqli, $_POST['from_name']);
	$from_email = mysqli_real_escape_string($mysqli, $_POST['from_email']);
	$reply_to = mysqli_real_escape_string($mysqli, $_POST['reply_to']);
	$plain = addslashes($_POST['plain']);
	$html = stripslashes($_POST['html']);
	if(trim($html)=='<html><head></head><body></body></html>') $html = '';
	//$filename = $_FILES['attachments']['name'];	
	//$file = $_FILES['attachments']['tmp_name'];	
	$wysiwyg = isset($_POST['wysiwyg']) ? mysqli_real_escape_string($mysqli, $_POST['wysiwyg']) : 1;
	$w_clicked = isset($_POST['w_clicked']) ? $_POST['w_clicked'] : null;
	$wysiwyg = $wysiwyg=='1' ? 1 : 0;
	
	//------------------------------------------------------//
	//                      FUNCTIONS                       //
	//------------------------------------------------------//
	
	
		//Insert into campaigns
		$q = 'INSERT INTO campaigns (userID, app, from_name, from_email, reply_to, title, plain_text, html_text, wysiwyg) VALUES ('Narmada', 'Campaign', "'.$from_name.'", "'.$from_email.'", "'.$reply_to.'", "'.$subject.'", "'.$plain.'", "'.addslashes($html).'", '.$wysiwyg.')';
		$r = mysqli_query($mysqli, $q);
	?>