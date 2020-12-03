<?php
    $title = 'Schema Creation' ;
    include_once('includes/header.html');
?>
<br />
<div class="container">
    <div class="box" align="center">
<?php
    require_once('create_database.php');
    require_once('drop_table.php');
    require_once('create_table.php');
    require_once('create_table2.php');
    require_once('admin_data.php');
?>
<br />
        <a href="index.php"> <button type="submit" class="btn btn-primary">Go to Homepage</button></a>
    </div>
</div>