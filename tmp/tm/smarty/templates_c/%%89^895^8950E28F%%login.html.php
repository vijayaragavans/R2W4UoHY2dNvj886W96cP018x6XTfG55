<?php /* Smarty version 2.6.25, created on 2014-01-22 18:08:03
         compiled from site/en/login.html */ ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <title>Hagal Admin Panel - Login Page</title>
        
        <link rel="stylesheet" href="<?php echo $this->_tpl_vars['static_server']; ?>
files/assets/bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="login_box">
        
        <!-- sign in -->
            <form action="<?php echo $this->_tpl_vars['base_url']; ?>
home/login" method="post" id="login_form">
                <div class="box_top">Couponlist</div>    
                <div class="box_content">
                    <div class="row-fluid">
                        <div class="text-center">
                            <label for="l_username">Username</label>
                            <input class="span12" type="text" id="l_username" name="l_username" placeholder="Username" >
                        </div>
                        <div class="text-center">
                            <label for="l_password">Password</label>
                            <input class="span12" type="password" id="l_password" name="l_password" placeholder="Password" >
                        </div>
                        <button class="btn btn-block btn-primary btn-large" type="submit">Sign In</button>
                        <p class="text-center minor_text"><a class="form_toggle" href="#pass_form"></a></p>
                    </div>
                </div>
            </form>
            
        </div>