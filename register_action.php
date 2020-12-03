<?php
    require_once('includes/connect_db.php');
    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
    {
        # Insert title.
        $title = mysqli_real_escape_string( $dbc, trim( $_POST[ 'title' ] ) ) ;

        # Insert first name.
        $first_name = mysqli_real_escape_string( $dbc, trim( $_POST[ 'first_name' ] ) ) ;

        # Insert other name(s).
        $other_name = mysqli_real_escape_string( $dbc, trim( $_POST[ 'other_name' ] ) ) ;

        # Insert last name.
        $last_name = mysqli_real_escape_string( $dbc, trim( $_POST[ 'last_name' ] ) ) ;

        # Insert email.
        $email = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ;

        # Insert maiden.
        $maiden = mysqli_real_escape_string( $dbc, trim( $_POST[ 'mmn' ] ) ) ;

        # Insert gender.
        $gender = mysqli_real_escape_string( $dbc, trim( $_POST[ 'gender' ] ) ) ;

        # Insert marital.
        $marital = mysqli_real_escape_string( $dbc, trim( $_POST[ 'marital' ] ) ) ;

        # Insert date of birth.
        $dob = mysqli_real_escape_string( $dbc, trim( $_POST[ 'dob' ] ) ) ;

        # Insert place of birth.
        $pob = mysqli_real_escape_string( $dbc, trim( $_POST[ 'pob' ] ) ) ;

        # Insert date of nationality.
        $nationality = mysqli_real_escape_string( $dbc, trim( $_POST[ 'nationality' ] ) ) ;

        # Insert state of origin.
        $soo = mysqli_real_escape_string( $dbc, trim( $_POST[ 'soo' ] ) ) ;

        # Insert contact address.
        $address = mysqli_real_escape_string( $dbc, trim( $_POST[ 'address' ] ) ) ;

        # Insert tax identification number.
        $tin = mysqli_real_escape_string( $dbc, trim( $_POST[ 'tin' ] ) ) ;

        # Insert phone.
        $phone = mysqli_real_escape_string( $dbc, trim( $_POST[ 'phone' ] ) ) ;

        # Insert BVN.
        $bvn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'bvn' ] ) ) ;

        $q = "INSERT INTO customers (title, first_name, other_name, last_name, email, maiden, gender, marital, dob, pob, nationality, soo, con_address, tin, phone, bvn) VALUES ('$title', '$first_name', '$other_name', '$last_name', '$email', '$maiden', '$gender', '$marital', '$dob', '$pob', '$nationality', '$soo', '$address', '$tin', '$phone', '$bvn')";

        $r = mysqli_query ( $dbc, $q ) ;

        if($r){
            echo '<div class="alert alert-success"><strong>Registration Successful.</strong> Thanks for filling out the form. We will get back to you. ' .$dbc->error. '</div>';
        }
        else{
            echo '<div class="alert alert-danger"><strong>Error!</strong> Something went wrong!!!</div>';
        }
    }

    # Close database connection.
    mysqli_close($dbc);
?>