<?php
  $page_title = 'Admin Home' ;
  include_once('includes/header.html');
?>
<br />
<div id="all">
    <div id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Other Pages</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="index.php" class="nav-link active">Home</a></li>
                    <li><a href="goodbye.php" class="nav-link">Logout</a></li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-lg-9">
                <div class="box">
                  <h1>Registered Depositors</h1>
                  <table class="table table-striped">
                    <thead class="bg bg-primary table-bordered">
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      session_start() ;

                      if ( !isset( $_SESSION[ 'admin_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

                      require ( 'includes/connect_db.php' ) ;

                      $q = "SELECT * FROM customers" ;
                      $r = mysqli_query( $dbc, $q ) ;
                      if ( mysqli_num_rows( $r ) > 0 )
                      {

                        while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
                      {
                    ?>
                      <tr>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td align="center"><a href="<?php echo 'depositor-detail.php?id='.$row['id']; ?>"><button type="submit" class="btn btn-outline-primary">Full Detail</button></a></td>
                      </tr>
                      <?php
                        }

                        mysqli_close( $dbc ) ; 
                      }
                      else { echo '<p>There are currently no registered customers.</p>' ; }
                      ?>
                    </tbody>
                  </table>
                  <hr>
              </div>
            </div>
        </div>
     </div>
   </div>
</div>