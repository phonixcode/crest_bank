<?php
$page_title = 'Login' ;
include ( 'includes/header.html' ) ;
?>
<br />
<div id="all">
    <div id="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <?php
                            if ( isset( $errors ) && !empty( $errors ) )
                            {
                             echo '<p id="err_msg">Oops! There was a problem:<br>' ;
                             foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
                             echo 'Please try again or <a href="register.php">Register</a></p>' ;
                            }
                        ?>
                        <h1>Admin Login</h1>
                        <form action="login_action.php" method="post">
                            <p>Email Address: <input type="text" name="email"> </p>
                            <p>Password: <input type="password" name="pass"></p>
                            <p><input type="submit" class="btn btn-primary" value="Login" ></p>
                        </form>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

