<?php
    $page_title = 'Depositor Detail' ;
    # Access session.
    session_start() ;

    # Redirect if not logged in.
    if ( !isset( $_SESSION[ 'admin_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

    $page_title = 'Depositor Detail' ;
    include_once('includes/header.html');
    $id=$_GET['id'];
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
                  <h1>FULL DETAIL</h1>
                  <hr>
                  <table class="table table-striped">
                    <tbody>
                        <?php

                            require ( 'includes/connect_db.php' ) ;

                            $q = "SELECT * FROM customers WHERE id = '$id'" ;
                            $r = mysqli_query( $dbc, $q ) ;
                            if ( mysqli_num_rows( $r ) > 0 )
                            {
                            echo '<tbody>';
                            while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
                            {
                        ?>
                        <tr>
                            <th class="bg bg-primary table-bordered">Title</th>
                            <td><?php echo $row['title']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">First Name</th>
                            <td><?php echo $row['first_name']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Last Name</th>
                            <td><?php echo $row['last_name']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Other Name</th>
                            <td><?php echo $row['other_name']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Email</th>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Mother Maiden Name</th>
                            <td><?php echo $row['maiden']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Gender</th>
                            <td><?php echo $row['gender']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Marital Status</th>
                            <td><?php echo $row['marital']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Date of Birth</th>
                            <td><?php echo $row['dob']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Place of Birth</th>
                            <td><?php echo $row['pob']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Nationality</th>
                            <td><?php echo $row['nationality']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">State of Origin</th>
                            <td><?php echo $row['soo']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Address</th>
                            <td><?php echo $row['con_address']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Tax Identification Number</th>
                            <td><?php echo $row['tin']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Phone Number</th>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr>
                            <th class="bg bg-primary table-bordered">Bank Verification Number</th>
                            <td><?php echo $row['bvn']; ?></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                  </table>
                  <hr>
                  <div align="center">
                    <a href="index.php"><button type="submit" class="btn btn-primary">Back to List</button>
                  </div>
              </div>
            </div>
        </div>
     </div>
   </div>
</div>