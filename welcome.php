<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="css/header.css" type="text/css" rel="stylesheet">
  <link href="css/index.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="icon-bar" style="height: 30px;">
<k  style="float: left; color: white; margin-left:30px;">For any queries, Mail at girnarhouse.iitd@gmail.com</k>
<a href = "logout.php" style="float: right; color: white; margin-left: 20px; margin-right: 30px;">Logout</a>
<a href = "https://www.facebook.com/groups/girnarhouse/" style="float: right; color: white; margin-left:20px;" class = "fa fa-facebook"></a>
<a href = "#" style="float: right; color: white; margin-left:20px;" class = "fa fa-twitter"></a>
<a href = "#" style="float: right; color: white; margin-left:20px;" class = "fa fa-linkedin"></a>

</div>
  <div class="headin" style="margin-top: 2px;">
<a class="navbar-logo" href="index.html" >
                <img src="img/girnar.jpeg" alt="logo of Girnar" height=120px width=270vh>
              </a>
              <br><br>
<a href="index.php" style="font-size: 16px;margin-right: 40px">HOME</a>
<div class="dropdown">
<a href="#" class="dropbtn" style="font-size: 16px;margin-right: 40px">ABOUT</a>
<div class="dropdown-content">
<a href="history.php" style="margin-left: 0">History</a>
<a href="vision_mission.php" style="margin-left: 0">About Embelem</a>
<a href="quality_policy.php" style="margin-left: 0">Hostel Events</a>
</div>
</div>
<div class="dropdown">
<a href="#" class="dropbtn" style="font-size: 16px;margin-right: 40px">FACILITIES</a>
<div class="dropdown-content">
<a href="textile_clothing.php" style="margin-left: 0">Mess</a>
<a href="machine_parts.php" style="margin-left: 0">Maintenance</a>
<a href="textile_clothing.php" style="margin-left: 0">Amenities</a>
<a href="textile_clothing.php" style="margin-left: 0">Student Accomodation</a>
<a href="textile_clothing.php" style="margin-left: 0">Infrastructure</a>
</div>
</div>
<div class="dropdown">
<a href="#" class="dropbtn" style="font-size: 16px;margin-right: 40px">CULTURE</a>
<div class="dropdown-content">
<a href="about_us.php" style="margin-left: 0">Girnar Culture</a>
<a href="about_us.php" style="margin-left: 0">Dance Club</a>
<a href="about_us.php" style="margin-left: 0">Debating Club</a>
<a href="about_us.php" style="margin-left: 0">Dramatics Club</a>
<a href="about_us.php" style="margin-left: 0">FACC</a>
<a href="about_us.php" style="margin-left: 0">Hindi Samiti</a>
<a href="about_us.php" style="margin-left: 0">Literary Club</a>
<a href="about_us.php" style="margin-left: 0">Music Club</a>
<a href="about_us.php" style="margin-left: 0">PFC</a>
<a href="about_us.php" style="margin-left: 0">Quizzing Club</a>
</div>
</div>
<div class="dropdown">
<a href="#" class="dropbtn" style="font-size: 16px;margin-right: 40px">SPORTS</a>
<div class="dropdown-content">
<a href="textile_clothing.php" style="margin-left: 0">Indoor Sports</a>
<a href="machine_parts.php" style="margin-left: 0">Outdoor Sports</a>
</div>
</div>
<a href="gallery.php" style="font-size: 16px;margin-right: 40px">GALLERY</a>
<a href="contact_us.php" style="font-size: 16px;margin-right: 40px">CONTACT</a>
</div>
<br><br><br><br><br><br>

<?php
session_start();
include("functions.php");
if(isset($_SESSION["user_id"])) {
	if(isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=1");
	}
}
else
{
    $url = "login.php";
    echo "Login Session is Expired. Please Login Again";
    header("Location:$url");
}
?>

<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"girnar");
?>



<?php
if(isset($_SESSION["user_name"])) {    }
?>

<script>
// When the user clicks on div, open the popup
function myunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
               
<h1 align="center">Welcome <?php echo $_SESSION["user_name"]; ?></h1>
               <?php    
               $ch="select * from notices where username = '$_SESSION[user_name]' ORDER BY date DESC";
               $query = mysqli_query($con,$ch);
                       	?>

                       	<table style="width:100%;">
                   <tr align="center" >
                       <td>
                           
               <table valign="center" style="border: 1px solid greenyellow;width:85%">
                   <tr align="center" style="border: 1px solid greenyellow; height: 3em">
                       <th style="border: 1px solid greenyellow;width:60%">Notices</th>
                       <th style="border: 1px solid greenyellow;width:25%">Date</th>
                       <th style="border: 1px solid greenyellow;width:15%">Action</th>
                        </tr>
                        <?php while ($ty = mysqli_fetch_array($query)){ ?>
                        <tr align="center" style="border: 1px solid greenyellow; height: 3em">
                        <td style="border: 1px solid greenyellow;"><?php echo $ty[2]?></td>
                        <td style="border: 1px solid greenyellow;"><?php echo $ty[3]?></td>
                        <td style="border: 1px solid greenyellow;"><a href='delete.php?id=<?php echo($ty[0]) ?>'>Delete row</a></td>
                        </tr>
                        <?php } ?>
               </table>


                       </td>
                   </tr>
               </table>
<br><br>
               <table style="width: 100%">
            	<tr align="center">
            		<td>
            <a href="add.php"><input id="button" type="submit" value="Add New Notice" name="an" class="btn btn-block btn-primary" style="width: 250px;height: 35px" /></a><br>
        </td>
    </tr>
</table>
               
</body>
</html>