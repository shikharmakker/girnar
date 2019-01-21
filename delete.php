<?php
	$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"girnar");
    
    $id = $_GET['id'];

    $sql = "DELETE FROM notices WHERE id = '$id'";
    $res = mysqli_query($con,$sql);
    echo "<meta http-equiv = 'refresh' content='0;url=welcome.php'>";
    
?>