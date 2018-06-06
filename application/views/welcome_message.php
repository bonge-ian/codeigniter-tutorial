<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/foundation.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <style>
        body {
            font-family: Segoe UI, Quicksand, Ebrima, Lato;
            font-size: 18px;
            margin-top: 20px;
            background-image: url("<?= base_url('assets/img/tri.jpg'); ?>");
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
            
        }
        h1 {
            font-family: Microsoft Yi Bait !important;
            font-size: 50px;
            text-align: center:
            color: #343434;
        }
        h3 {
            font-family: Microsoft Yi Bait !important;
            font-size: 30px;
            text-align: center:
            color: #343434;
        }
        
    </style>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 small-12 cell">
        	<h1>BLOGGING SYSTEM USING PHP MVC CODEIGNITER</h1>
        		<div class="grid-x grid-padding-x">
        			<div class="large-9 medium-9 small-12 cell">
        				<h3>SIGN IN</h3>
        				<!-- form_open($action, $attr[], $hidden_fields[]) - creates opening of form  -->
        				<?= form_open('welcome/signin'); ?>
        					<div class="grid-x grid-padding-x">
        						<div class="large-12 medium-12 small-12 cell">
        							<!-- create email input -->
        							<?= form_input([
        							    'name' => 'email',
        							    'placeholder' => 'Enter your Email',
        							    'class' => 'textbox'
        							]);?>
        							<!-- create password input -->
        							<?= form_password([
        							    'name' => 'password',
        							    'placeholder' => 'Enter your password',
        							    'class' => 'textbox'
        							]);?>
        							<!-- create submit button -->
        							<?= form_submit([
        							    'name' => 'submit',
        							    'value' => 'SIGN IN',
        							    'class' => 'btn1 button  textbox'
        							]);?>
        							<?= form_reset([
        							    'name' => 'reset',
        							    'value' => 'RESET',
        							    'class' => 'btn1 button  textbox'
        							]);?>
        						</div>
        					</div> <!-- end of form grid -->
        				<!-- form_close() - close string. -->
        				<?= form_close();?>	
        			</div> 
        		</div> <!-- end of sign in grid -->
        </div> <!-- end of blog cell   -->
        <div class="small-12 medium-6 large-6 cell">
        	<h3>REGISTER</h3>
        	<?= form_open('welcome/signup'); ?>
        	<?php if ($msg = $this->session->flashdata('response')): ?>
        		<div class="response">
        			<?= $msg; ?>
        		</div>
            <?php endif; ?>
        	<?php $data = ['user_role_id' => 2 ];?>
        	<?= form_hidden($data); ?>
            	<div class="grid-x grid-padding-x">
            		<div class="small-12 medium-12 large-12 cell">
            			<?= form_input([
            				    'name' => 'username',
            					'placeholder' => 'Enter a suitable username',
            					'class' => 'textbox'
            		    ]);?>
            		    <!-- for displaying errors -->
            		    <?= form_error('username', '<div class="text-danger">', '</div>');?>
            		    <?= form_input([
            				    'name' => 'email',
            					'placeholder' => 'Enter a valid email',
            					'class' => 'textbox'
            		    ]);?>
            		    <!-- for displaying errors -->
            		    <?= form_error('email', '<div class="text-danger">', '</div>');?>
            		    <?= form_password([
            				    'name' => 'password',
            					'placeholder' => 'Enter a strong password',
            					'class' => 'textbox'
            		    ]);?>
            		    <!-- for displaying errors -->
            		    <?= form_error('password', '<div class="text-danger">', '</div>');?>
            		    <?= form_input([
            				    'name' => 'mobile',
            					'placeholder' => 'Enter your number',
            					'class' => 'textbox'
            		    ]);?>
            		    <!-- for displaying errors -->
            		    <?= form_error('mobile', '<div class="text-danger">', '</div>');?>
            		    <?= form_submit([
            				     'name' => 'submit',
            					 'value' => 'SIGN UP',
            					 'class' => 'btn button textbox'
            			]);?>
            			<?= form_reset([
            				     'name' => 'reset',
            					 'value' => 'RESET',
            				     'class' => 'btn button textbox'
            			]);?>
            		</div>
            	</div><!-- end of form grid -->
        	<?= form_close();?>
        </div><!-- end of register form grid -->
      </div> <!-- end of grid -->  
    </div><!-- end of grid container -->

    <script src="<?= base_url('assets/js/vendor/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/js/vendor/what-input.js')?>"></script>
    <script src="<?= base_url('assets/js/vendor/foundation.js'); ?>"></script>
    
  </body>
</html>
