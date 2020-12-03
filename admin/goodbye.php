<?php
  $page_title = 'Admin Logout' ;
  $g_active = 'active';
session_start() ;

if ( !isset( $_SESSION[ 'admin_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

$page_title = 'Goodbye' ;
include ( 'includes/header.html' ) ;

$_SESSION = array() ;

session_destroy() ;
?>
<br />
<div id="all">
    <div id="content">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10" align="center">
                        <h1>Logged out</h1>
                        <?php echo '<h3>Goodbye!</h3><p>You are now logged out.</p><p><a href="login.php">Login</a></p>' ; ?>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>