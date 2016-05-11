<?php include('../Templates/Header.php');?>
<?php include('../Templates/Top.php');?>
<?php include('../Templates/Sidebar.php');?>

<?php include('../Config/common.php');?>

<!-- Validation -->

<form action="<?php echo get_app_info('path')?>/Data/save-brand.php" method="POST" accept-charset="utf-8" class="form-vertical" id="settings-form">

<div class="row">
	
    <div class="col-lg-6">
    	<h2><?php echo _('New brand');?></h2><br/>
	    	
    	<div class="control-group">
	    	<div class="controls">
     	      <label class="control-label" for="app_name"><?php echo _('Brand name');?></label>
              <input type="text" class="form-control" id="app_name" name="app_name" placeholder="<?php echo _('The name of the brand you\'re sending from');?>">
            </div>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
	          <label class="control-label" for="from_name"><?php echo _('From name');?></label>
              <input type="text" class="form-control" id="from_name" name="from_name" placeholder="<?php echo _('From name');?>">
            </div>
        </div>
        

    	<div class="control-group">
	    	<div class="controls">
				<label class="control-label" for="from_email"><?php echo _('From email');?></label>	
				<input type="text" class="form-control" id="from_email" name="from_email" placeholder="<?php echo _('From email');?>">
            </div>
            <p id="verification-check-loader" style="display:none;"><img src="<?php echo get_app_path()?>/img/loader.gif" style="width:16px;"/> <?php echo _('Checking if your \'From email\' is verified in your SES console..');?><br/><br/></p>
            <div class="alert" id="unverified-email" style="display:none;"><strong><i class="icon icon-warning-sign"></i> <?php echo _('Unverified \'From email\'');?></strong>: <?php echo _('Your \'From email\', (or its domain) is either not verified in your Amazon SES console or it is not verified in the same region as what is set in your main Settings. Please follow very closely Step 6 of our Get Started Guide');?> <a href="http://sendy.co/get-started" target="_blank">http://sendy.co/get-started</a></div>
            <div class="alert alert-success" id="verified-email" style="display:none;"><strong><i class="icon icon-ok"></i> <?php echo _('Congrats! This \'From email\' is verified.');?></strong></div>
            
            <?php if(get_app_info('s3_key')!='' && get_app_info('s3_key')!=''):?>
            <script type="text/javascript">
            	$(document).ready(function() {
            		$("#from_email").focusout(function(){
            			$("#verification-check-loader").show();
            			$("#unverified-email").hide();
            			$("#verified-email").hide();
            			
	            		$.post("<?php echo get_app_info('path')?>/includes/app/check-email-verification.php", { from_email: $("#from_email").val() },
            			  function(data) {
            			      if(data==false)
            			      {
            			      	$("#verification-check-loader").hide();
            			      	$("#unverified-email").show();
            			      	$("#verified-email").hide();
            			      }
            			      else if(data==true)
            			      {
            			      	$("#verification-check-loader").hide();
            			      	$("#unverified-email").hide();
            			      	$("#verified-email").show();
            			      }
            			      else
            			      {
	            			  	$("#verification-check-loader").hide();
            			      }
            			  }
            			);
            		});
            	});
            </script>
            <?php endif;?>
            
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
				<label class="control-label" for="reply_to"><?php echo _('Reply to email');?></label>
				<input type="text" class="form-control" id="reply_to" name="reply_to" placeholder="<?php echo _('Reply to email');?>">
            </div>
        </div>
        
        <input type="hidden" name="uid" value="<?php echo app_config('userID');?>">
		
		</div> 

		<div class="col-lg-6">
		
        <h3><?php echo _('SMTP settings (only if you\'re not using Amazon SES)');?></h3><br/>
        
        <div class="well">
	        <?php echo _('If you prefer using other email service providers over Amazon SES for sending emails, set your SMTP settings here. Note that multi-threading is not supported, bounces and complaints will also not be registered if you use other email service providers to send emails.');?>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
	          <label class="control-label" for="smtp_host"><?php echo _('Host');?></label>
              <input type="text" class="form-control" id="smtp_host" name="smtp_host" placeholder="eg. smtp.gmail.com">
            </div>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
	          <label class="control-label" for="smtp_port"><?php echo _('Port');?></label>
              <input type="text" class="form-control" id="smtp_port" name="smtp_port" placeholder="eg. 465">
            </div>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
		        <label class="control-label" for="smtp_ssl">SSL / TLS</label>
				<select name="smtp_ssl">
				  <option value="ssl" id="ssl">SSL</option>
				  <option value="tls" id="tls">TLS</option>
				 </select>
            </div>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
	          <label class="control-label" for="smtp_username"><?php echo _('Username');?></label>
              <input type="text" class="form-control" id="smtp_username" name="smtp_username" placeholder="<?php echo _('Username (usually your email)');?>" autocomplete="off">
            </div>
        </div>
        
    	<div class="control-group">
	    	<div class="controls">
				<label class="control-label" for="smtp_password"><?php echo _('Password');?></label>
				<input type="password" class="form-control" id="smtp_password" name="smtp_password" placeholder="<?php echo _('Your password');?>" autocomplete="off">
            </div>
        </div>
        
        <button type="submit" class="btn btn-inverse"><i class="glyphicon glyphicon-ok glyphicon glyphicon-white"></i> <?php echo _('Save');?></button>
    </div>   
</div> 

</form>

<?php include('../Templates/footer.php');?>