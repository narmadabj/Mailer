<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Check out Sendy's online demo and get a hands on tour on all features that Sendy offers.">
		<meta name="author" content="">
		<link rel="Shortcut Icon" type="image/ico" href="https://sendy.co/demo/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="https://sendy.co/demo/css/bootstrap.css?3" />
		<link rel="stylesheet" type="text/css" href="https://sendy.co/demo/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="https://sendy.co/demo/css/responsive-tables.css" />
		<link rel="stylesheet" type="text/css" href="https://sendy.co/demo/css/font-awesome.min.css" />
		<link rel="apple-touch-icon-precomposed" href="https://sendy.co/demo/img/sendy-icon.png" />
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
		<link rel="stylesheet" type="text/css" href="https://sendy.co/demo/css/all.css?2" />
		<script type="text/javascript" src="https://sendy.co/demo/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="https://sendy.co/demo/js/jquery-migrate-1.1.0.min.js"></script>
		<script type="text/javascript" src="https://sendy.co/demo/js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="https://sendy.co/demo/js/bootstrap.js"></script>
		<script type="text/javascript" src="https://sendy.co/demo/js/responsive-tables.js"></script>
		<script type="text/javascript" src="https://sendy.co/demo/js/main.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://sendy.co/mint/?js"></script>
		<title>Sendy Demo</title>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
		  <div class="separator"></div>
	      <div class="navbar-inner">
	        <div class="container-fluid">
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          
	          <!-- Check if sub user -->
	          	          <a class="brand" href="https://sendy.co/demo/"><img src="https://www.gravatar.com/avatar/72b6f7e956229680fadec9bd3643d33e?s=36&d=https://sendy.co/demo/img/sendy-avatar.png" title="" class="main-gravatar"/>Sendy Demo</a>
	          	          
	          	          <div class="btn-group pull-right">
	            <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
	              <i class="icon-user icon-white"></i> Sendy	              <span class="caret"></span>
	            </a>
	            <ul class="dropdown-menu">
	              <li><a href="https://sendy.co/demo/settings"><i class="icon icon-cog"></i> Settings</a></li>
	              <li class="divider"></li>
	              <li><a href="https://sendy.co/demo/logout"><i class="icon icon-off"></i> Logout</a></li>
	            </ul>
	          </div>
	          
	          
	          <!-- Check if sub user -->
	          	          
	          <div class="btn-group pull-right">
				  <a class="btn btn-white dropdown-toggle" data-toggle="dropdown" href="#">
				    <img src="https://sendy.co/demo/uploads/logos/1.png" style="margin:-4px 5px 0 0; width:16px; height: 16px;"/>SUBERNOVA				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				  	<li class="active"><a href="https://sendy.co/demo/app?i=1"><img src="https://sendy.co/demo/uploads/logos/1.png" style="margin:-4px 5px 0 0; width:16px; height: 16px;"/>SUBERNOVA</a></li><li><a href="https://sendy.co/demo/app?i=2"><img src="https://sendy.co/demo/uploads/logos/2.png" style="margin:-4px 5px 0 0; width:16px; height: 16px;"/>MockVault</a></li>				  </ul>
				</div>
								
				
	          <div class="nav-collapse">
	            <ul class="nav">
	              
	            </ul>
	          </div><!--/.nav-collapse -->
	          
	          
	          
	          	          
	        </div>
	      </div>
	    </div>
	    <div class="container-fluid">
	    
<script src="https://sendy.co/demo/js/ckeditor/ckeditor.js?7"></script>

<script src="https://sendy.co/demo/js/create/editor.js"></script>

<!-- Validation -->
<script type="text/javascript" src="https://sendy.co/demo/js/validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#edit-form").validate({
			rules: {
				subject: {
					required: true	
				},
				from_name: {
					required: true	
				},
				from_email: {
					required: true,
					email: true
				},
				reply_to: {
					required: true,
					email: true
				},
				html: {
					required: true
				}
			},
			messages: {
				subject: "The subject of your email is required",
				from_name: "\'From name\' is required",
				from_email: "A valid \'From email\' is required",
				reply_to: "A valid \'Reply to\' email is required",
				html: "Your HTML code is required"
			}
		});
	});
</script>

<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Campaigns</li>
        <li ><a href="https://sendy.co/demo/app?i=1"><i class="icon-home "></i> All campaigns</a></li>
        <li class="active"><a href="edit?i=1&c=35"><i class="icon-edit  icon-white"></i> Create new campaign</a></li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">Templates</li>
        <li ><a href="https://sendy.co/demo/templates?i=1"><i class="icon-envelope "></i> All templates</a></li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">Lists & subscribers</li>
        <li ><a href="https://sendy.co/demo/list?i=1"><i class="icon-align-justify  "></i> View all lists</a></li>
    </ul>
    <ul class="nav nav-list">
        <li class="nav-header">Reports</li>
        <li ><a href="https://sendy.co/demo/reports?i=1"><i class="icon-zoom-in  "></i> See reports</a></li>
    </ul>
</div>    </div> 
    
    <div class="span10">
	    <div class="row-fluid">
		    <div class="span10">
			    <div>
			    	<p class="lead">SUBERNOVA</p>
		    	</div>
		    	<h2>Edit campaign</h2><br/>
		    </div>
	    </div>
	    
	    <div class="row-fluid">
	    	<form action="javascript:void(0)" method="POST" accept-charset="utf-8" class="form-vertical" id="edit-form" enctype="multipart/form-data">
			    <div class="span3">
				    
				    <div id="campaign-title-field" style="display:none;">
					    <label class="control-label" for="campaign_title">Campaign title</label>
				    	<div class="control-group">
					    	<div class="controls">
				              <input type="text" class="input-xlarge" id="campaign_title" name="campaign_title" placeholder="Title of this campaign" value="">
				            </div>
				        </div>
			        </div>
			    
			    	<label class="control-label" for="subject">Subject</label>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge" id="subject" name="subject" placeholder="Subject of this email" value="Sample newsletter">
			            </div>
			        </div>
			        
			        			        <a href="javascript:void(0);" id="set-campaign-title-btn">Set a title for this campaign?</a> <a href="javascript:void(0)" title="This title (instead of the subject line) will be displayed in your campaigns list and reports. You can also set the title later in the campaign report after sending this campaign." class="icon icon-info-sign" id="set-campaign-title-btn-info"></a>
					<script type="text/javascript">
					  $(document).ready(function() {
					  	$("#set-campaign-title-btn").click(function(){
					      	$(this).fadeOut();
					      	$("#set-campaign-title-btn-info").fadeOut();
					      	$("#campaign-title-field").slideDown("fast");
					      	$("#campaign_title").focus();
					  	});
					  	$("#campaign_title").blur(function(){
						  	if($(this).val()=='')
						  	{
							  	$("#set-campaign-title-btn").fadeIn();
							  	$("#set-campaign-title-btn-info").fadeIn();
						      	$("#campaign-title-field").slideUp("fast");
					        }
					  	});
					  });
					</script>
								        
			        <label class="control-label" for="from_name" style="clear:both;">From name</label>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge" id="from_name" name="from_name" placeholder="From name" value="SUBERNOVA">
			            </div>
			        </div>
			        
			        <label class="control-label" for="from_email">From email</label>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge"  id="from_email" name="from_email" placeholder="From email" value="hello@subernova.com">
			            </div>
			        </div>
			        
			        <label class="control-label" for="reply_to">Reply to email</label>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge" id="reply_to" name="reply_to" placeholder="Reply to email" value="support@subernova.com">
			            </div>
			        </div>
			        
			        <label class="control-label" for="plain">Plain text</label>
		            <div class="control-group">
				    	<div class="controls">
			              <textarea class="input-xlarge" id="plain" name="plain" rows="10" placeholder="Plain text of this email">------------------------------------------
Meet Sendy, our brand new app!
------------------------------------------

How're you doing? We just released a new self hosted app you can 
download and install on your own server, we called it Sendy!

------------------------------------------
What is Sendy?
------------------------------------------

Sendy is a self hosted email newsletter application that lets you send trackable emails via Amazon Simple Email Service (SES). Complete with reports, subscriber and list management.

Sendy was born out of frustration of paying for expensive email campaign services. We send newsletters via Campaign Monitor for SUBERNOVA and MockVault. No doubt Campaign Monitor is a great email campaign service, the price goes up to hundreds of dollars just for one email campaign. As our subscriber base grows, the cost per campaign grows significantly high.

We really don't ask for much, just a newsletter application that enables us to manage subscribers, send campaigns and view reports. What we managed to find were either too expensive or flat out ugly.

------------------------------------------
The best service we've found
------------------------------------------

The best service we've found is Amazon Simple Email Service (SES). It offers email sending at high deliverability rates and at an insanely low price. $1 (Amazon SES) versus $150 (Campaign Monitor) for 10,000 emails?? Sounds great! But they don't offer the ability to send trackable newsletters and manage lists and subscribers.

Amazon SES is in need of an application that is built around it.

And so we built it.

You can use Sendy too at a one time introductory fee of $40 (we'll be pricing it at $50 at some point).</textarea>
			            </div>
			        </div>
			        
			        <label class="control-label" for="query_string">Query string</label>
			        <div class="well">
				        Optionally append a query string to all links in your email newsletter. A good use case is Google Analytics tracking. Don't include '?' in your query string.			        </div>
			    	<div class="control-group">
				    	<div class="controls">
			              <input type="text" class="input-xlarge" id="query_string" name="query_string" placeholder="eg. utm_source=sendy&utm_medium=email&utm_content=email%20newsletter&utm_campaign=email%20newsletter" value="">
			            </div>
			        </div>
			        
			        <label class="control-label" for="attachments">Attachments</label>
		            <div class="control-group">
				    	<div class="controls">
				    		<input type="file" id="attachments" name="attachments[]" multiple />
			            </div>
			        </div>
			        
			        <br/>		        
			        
			        <button type="submit" class="btn btn-inverse" onclick="window.location='send-to?i=1&c=35'"><i class="icon-ok icon-white"></i> Save & next</button>
			        
			    </div>   
			    
			    <div class="span9">
			    	<p>
				    	<label class="control-label" for="html">HTML code</label>
				    	<div class="btn-group">
				    							  <button class="btn" id="toggle-wysiwyg">Save and switch to HTML editor</button> <span class="wysiwyg-note">Switch to HTML editor if the WYSIWYG editor is causing your newsletter to look weird.</span>												<script type="text/javascript">
							$("#toggle-wysiwyg").click(function(e){
								e.preventDefault();
								alert("This function is disabled in the demo.");
							});
						</script>
						</div>
						<br/>
			            <div class="control-group">
					    	<div class="controls">
				              <textarea class="input-xlarge" id="html" name="html" rows="10" placeholder="HTML code of this email"><!DOCTYPE HTML>  
<html>  
  
<head>  
<meta content="en-us" http-equiv="Content-Language">  
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">  
<title>SUBERNOVA Newsletter</title>  
<style type="text/css">
	@media only screen and (max-width: 600px) {
		table{width:100%;}
		img{width:100%; height:auto;}
		#header{margin-bottom: -20px;}
		.footer{display:none;}
		#table{border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;}
	}
</style>
</head>
<body>
<!-- start wrapped table--> 
<div style="height: 100%; margin: -8px;padding: 0;background: #111111;line-height: 1.6em;-webkit-text-size-adjust: none;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
	<table width="100%" cellpadding="0" cellspacing="0" style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px; background: #111;"><tr><td>
	<!-- start intro text --> 
	<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
		<tr><td align="center" style="padding:10px 0 10px 0; color:#818180;"><p>Email looks weird? View the <webversion style="color:#67cff4;">web version</webversion></p></td></tr>
	<!-- end intro text --> 
	</table>
	<!-- end of header -->
	<!-- defined email background color -->   
	<table id="table" width="600" bgcolor="#e7e7e7" align="center" cellpadding="0" cellspacing="0" style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
		<!-- star of header image --> 
		<tr><td><img id="header" src="http://www.subernova.com/edms/images/header.gif" alt="header" style="border: 0;"></td></tr>
	    <tr><td style="padding:20px 0 20px 0;"><img src="http://www.subernova.com/edms/images/divider.gif" width="600" height="2" alt="divider" style="border: 0;"></td></tr>
	<!-- end of common black header --> 
	
	<!-- start module 17  --> 
		<tr>
	     <!-- module 17 image  -->    
	    	<td><img src="http://www.subernova.com/edms/15/hero.jpg" width="600" alt="image" style="border: 0;"></td>
	    </tr>
	    <tr>
	    	<td style="padding-top:10px;">
	        	<table style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
	            	<tr>
	                	<td width="20"></td>
	               	  <td>
	                  <h2 style="color: #362e25 !important; text-decoration: none; margin-bottom: 5px;font-family: Arial, Helvetica, sans-serif;font-size: 24px;font-weight: bold;">Meet Sendy, our brand new app!</h2>
	                  <p>How're you doing? We just released a new self hosted app you can download and install on your own server, we called it <a href="http://sendy.co" title="Sendy" style="color:#000000;">Sendy</a>!</p>
	    				</td>
	                    <td width="20"></td>
	                </tr>
	            </table>
	        </td>
	    </tr>
	<!-- end module 17  -->
	
	
	<!-- ROW  --> 
	<!-- start divider -->         
    <tr><td style="padding:20px 0 20px 0;"><img src="http://www.subernova.com/edms/images/divider.gif" width="600" height="2" alt="divider" style="border: 0;"></td></tr>
	<!-- end divider  -->
    <tr>
    	<td style="padding-top:0px;">
        	<table style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
            	<tr>
                	<td width="20"></td>
               	  <td>
     <!-- module 17 tittle  -->             
                  <h2 style="color: #362e25;margin-bottom: 5px;font-family: Arial, Helvetica, sans-serif;font-size: 20px;font-weight: bold;">What is Sendy?</h2>
     <!-- module 17 text  -->   
     			  <p>
	     			  <img src="http://www.subernova.com/edms/15/sendy.jpg" title="" style="border: 1px solid #C6C6C6;"/>
     			  </p>          
                  <p>Sendy is a self hosted email newsletter application that lets you send trackable emails via <a href="http://aws.amazon.com/ses/" title="Amazon SES" style="color:#000000;">Amazon Simple Email Service (SES)</a>. Complete with reports, subscriber and list management.<br/><br/>Sendy was born out of frustration of paying for expensive email campaign services. We send newsletters via Campaign Monitor for <a href="http://www.subernova.com" title="SUBERNOVA" style="color:#000000;">SUBERNOVA</a> and <a href="http://www.mockvault.com" title="MockVault" style="color:#000000;">MockVault</a>. No doubt Campaign Monitor is a great email campaign service, the price goes up to hundreds of dollars just for one email campaign. As our subscriber base grows, the cost per campaign grows significantly high.<br/><br/>We really don't ask for much, just a newsletter application that enables us to manage subscribers, send campaigns and view reports. What we managed to find were either too expensive or flat out ugly.</p>
      <!-- module 17 button  -->               
    				</td>
                    <td width="20"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- /ROW -->
    
    <!-- ROW  --> 
	<!-- start divider -->         
    <tr><td style="padding:20px 0 20px 0;"><img src="http://www.subernova.com/edms/images/divider.gif" width="600" height="2" alt="divider" style="border: 0;"></td></tr>
	<!-- end divider  -->
    <tr>
    	<td style="padding-top:0px;">
        	<table style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
            	<tr>
                	<td width="20"></td>
               	  <td>
     <!-- module 17 tittle  -->             
                  <h2 style="color: #362e25;margin-bottom: 5px;font-family: Arial, Helvetica, sans-serif;font-size: 20px;font-weight: bold;">The best service we've found</h2>
     <!-- module 17 text  -->   
     			  <p style="float:left; margin: 10px 10px 10px 0;">
	     			  <img src="http://www.subernova.com/edms/15/aws.jpg" title="" style="border: 1px solid #C6C6C6; width:200px !important; height:91px !important;"/>
     			  </p>          
                  <p>The best service we've found is <b>Amazon Simple Email Service (SES)</b>. It offers email sending at high deliverability rates and at an insanely low price. $1 (Amazon SES) versus $150 (Campaign Monitor) for 10,000 emails?? Sounds great! But they don't offer the ability to send trackable newsletters and manage lists and subscribers.<br/><br/>Amazon SES is in need of an application that is built around it.<br/><br/>And so we built it.<br/><br/>You can use <a href="http://sendy.co" title="Visit Sendy" style="color:#000000;">Sendy</a> too at a <b>one time</b> introductory fee of $40 (we'll be pricing it at $50 at some point).<br/><br/><a href="http://sendy.co"><img src="http://www.subernova.com/edms/15/learn-more.gif" title="Learn more at Sendy.co" style="width:232px !important; height: 42px !important;"/></a></p>
      <!-- module 17 button  -->               
    				</td>
                    <td width="20"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- /ROW -->
    
    
        
<!-- start divider -->         
        <tr><td style="padding:20px 0 20px 0;"><img src="http://www.subernova.com/edms/images/divider.gif" width="600" height="2" alt="divider" style="border: 0;"></td></tr>
	<!-- end divider  -->
	<!-- end module 17  -->
	
	<!-- start of common footer --> 
	<!-- start of module 20  -->
	  <tr>
	    	<td>
	        	<table style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
	            	<tr>
	                	<td width="20"></td>
	       <!-- social buttons  -->              
	               	  <td width="560" align="center">
	               	  	<tweet recommend="SUBERNOVA"></tweet>
			 <fblike likeurl="http://www.subernova.com"></fblike>
	               	  	</td>
	                    <td width="20"></td>
	                </tr>
	            </table>
	        </td>     </tr>
			</table>
	<!-- end of mail -->
	<!-- star of footer--> 
	<table width="600" align="center" cellpadding="0" cellspacing="0" style="color: #727272;font-family: Arial, Helvetica, sans-serif;font-size: 12px;">
	<tr>
		  <td><img class="footer" src="http://www.subernova.com/edms/images/footer.gif" width="600" height="23" alt="header" style="border: 0;"></td></tr>
		<tr>
	
	    <!-- start finish text --> 
		  <td align="center" style="padding:10px 0 10px 0; color:#818180;"><p style="font-size:11px;">Visit <a href="http://www.subernova.com" style="color: #67cff4;font-family: Arial, Helvetica, sans-serif;font-size: 12px;text-decoration: underline;border: none;">subernova.com</a><br>
		  Follow <a href="http://www.twitter.com/subernova" style="color: #67cff4;font-family: Arial, Helvetica, sans-serif;font-size: 12px;text-decoration: underline;border: none;">@SUBERNOVA</a> on Twitter
		 </p>
		 <p>
			 <a href="http://www.subernova.com" title="Visit SUBERNOVA" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #9a7722;text-decoration: underline;border: none;"><img src="http://www.subernova.com/edms/images/website.gif" alt="social1" style="width:41px !important; height: 40px !important;" style="padding: 0 5px 0 5px;border: 0;"></a>
	               	  	<a href="http://twitter.com/subernova" title="Follow @SUBERNOVA" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #9a7722;text-decoration: underline;border: none;"><img src="http://www.subernova.com/edms/images/twitter.gif" style="width:41px !important; height: 40px !important;" alt="social2" style="padding: 0 5px 0 5px;border: 0;"></a>
	               	  	<a href="mailto:support@subernova.com" title="Email SUBERNOVA" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #9a7722;text-decoration: underline;border: none;"><img src="http://www.subernova.com/edms/images/email.gif" style="width:41px !important; height: 40px !important;" alt="social3" style="padding: 0 5px 0 5px;border: 0;"></a>
		</p>
	      <p style="font-size:11px;">If you don't want to receive any more emails from us, you can <unsubscribe style="color:#67cff4; ">unsubscribe</unsubscribe></p></td></tr>
	<!-- end finish text -->  
	</table>
	<!-- end wrapped table--> 
	</td></tr></table>
</div> 
</body> 
</html></textarea>
				            </div>
				        </div>
				        <p>Use the following tags in your subject, plain text or HTML code and they'll automatically be formatted when your campaign is sent. For web version and unsubscribe tags, you can style them with inline CSS.</p><br/>
				    	<div class="row-fluid">
					    	<div class="span6">
						    	<h3>Essential tags (HTML only)</h3>
						    	The following tags can only be used on the HTML version<br/><br/>
						    	<p><strong>Webversion link: </strong><br/><code class="sel">&lt;webversion&gt;View web version&lt;/webversion&gt;</code></p>
						    	<p><strong>Unsubscribe link: </strong><br/><code class="sel">&lt;unsubscribe&gt;Unsubscribe here&lt;/unsubscribe&gt;</code></p>
						    	<br/>
						    	<h3>Essential tags</h3>
						    	The following tags can be used on both Plain text or HTML version<br/><br/>
						    	<p><strong>Webversion link: </strong><br/><code class="sel">[webversion]</code></p>
						    	<p><strong>Unsubscribe link: </strong><br/><code class="sel">[unsubscribe]</code></p>
						    	<br/>
					    	</div>
					    	<div class="span6">
						    	<h3>Personalization tags</h3>
						    	The following tags can be used on both Plain text or HTML version<br/><br/>
						    	<p><strong>Name: </strong><br/><code class="sel">[Name,fallback=]</code></p>
						    	<p><strong>Email: </strong><br/><code class="sel">[Email]</code></p>
						    	<p><strong>Two digit day of the month (eg. 01 to 31): </strong><br/><code class="sel">[currentdaynumber]</code></p>
						    	<p><strong>A full textual representation of the day (eg. Friday): </strong><br/><code class="sel">[currentday]</code></p>
						    	<p><strong>Two digit representation of the month (eg. 01 to 12): </strong><br/><code class="sel">[currentmonthnumber]</code></p>
						    	<p><strong>Full month name (eg. May): </strong><br/><code class="sel">[currentmonth]</code></p>
						    	<p><strong>Four digit representation of the year (eg. 2014): </strong><br/><code class="sel">[currentyear]</code></p>
						    	<br/>
						    	<h3>Custom field tags</h3><br/>
						    	<p>You can also use custom fields to personalize your newsletter, eg. <code class="sel">[Country,fallback=anywhere in the world]</code>.</p>
						    	<p>To manage or get a reference of tags from custom fields, go to any subscriber list. Then click 'Custom fields' button at the top right.</p>
					    	</div>
					    	<script type="text/javascript">
							$(document).ready(function() {
								$(".sel").click(function(){
									$(this).selectText();
								});
							});
							</script>
				    	</div>
			    	</p>
		    	</div>
		    </form>
	    </div>
	</div>
</div>
<hr>
	
	      <footer>
	      	<!-- Check if sub user -->
				        <p>
	        	&copy; 2016 <a href="http://sendy.co" title="" target="_blank">Sendy</a> | Demo | Version 2.x
	        </p>
	        	      </footer>
	    </div>
	    
	    <script type="text/javascript">
		  var GoSquared = {};
		  GoSquared.acct = "GSN-712845-T";
		  (function(w){
		    function gs(){
		      w._gstc_lt = +new Date;
		      var d = document, g = d.createElement("script");
		      g.type = "text/javascript";
		      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
		      var s = d.getElementsByTagName("script")[0];
		      s.parentNode.insertBefore(g, s);
		    }
		    w.addEventListener ?
		      w.addEventListener("load", gs, false) :
		      w.attachEvent("onload", gs);
		  })(window);
		</script>
		
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3002517-14']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>