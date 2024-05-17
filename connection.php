<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con){ 
    //echo "connection estaiblised";
    ?>
    <script>
    alert('connectio successful');
    </script>
    <?php
}else{ 
    //echo "connection not estaiblished there was some problem in the sever";
die("no connection" . mysqli_connect_error());
}
?>
