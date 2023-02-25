<?php


/**
 * 
 * The login page of the admin area
 * 
 * @package FluffyDiscoCMS
 * @since 0.0
 */


//Outputs the login header
function login_header(){
    ?>
    <html>
        <head>
            <link rel="stylesheet" href="./css/login.css">
        </head>

        <body>
    <?php
}

//Outputs the login footer
function login_footer(){
    ?>
        </body>

    </html>
    <?php
}


?>


<? login_header() ?>

<div class="fdc-login-container">
    <form class="fdc-login-form">
        <label for="fdc_user_name"> User Name: </label>
        <input type="text" name="fdc_user_name" id="fdc_user_name"/>

        <div class="fdc-login-devider"></div>

        <label for="fdc_user_password"> Password: </label>
        <input type="text" name="fdc_user_password" id="fdc_user_password"/>
    </form>
</div>


<? login_footer() ?>