<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/header.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>add</title>
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


<script language = JavaScript1.2>
                    function Verify()
                    {
                    		
                            myform.action = "insert.php";
                            myform.method = "post"; 
                    }
</script>
<link href="css/index.css" type="text/css" rel="stylesheet">
<form   method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return Verify()" name="myform">
            <div class="alert alert-error"></div>
            <table style="width: 100%">
            	<tr align="center">
            		<td>
<textarea id="txtArea" placeholder="Type Notice" name="address" rows="40" cols="70" style="height: 7em;width:800px" required></textarea>
<br><br>
<input id="button" type="submit" value="Add" name="save" class="btn btn-block btn-primary" style="height:35px; width:250px" onclick="return confirm('Please review the form before submiting!')"  />

</td>
</tr>
</table>
</form>

</body>
</html>