<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php include('header.php') ?>


<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "shikharmakker@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $complaint = $_REQUEST['complaint'];
  
  //send email
  mail($admin_email, "$subject", $complaint, "From:" . $email);
  
  //Email response
  echo 'Mail Sent . To go to home, <a href="index.php">click here</a>' ;  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<div class="body-content">
    <div class="module">
        <br>	
        <h1 align="center" style="font-size: 3em">ENQUIRY</h1>
       
        
        <form   method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return Verify()" name="myform">
            <div class="alert alert-error"></div>
            <table style="width: 100%">
            	<tr align="center">
            		<td>
            <input type="text" placeholder="Name" name="name" style="width: 350px; background-color:rgba(0, 0, 0, .2);color:black" required /><br>
            <input type="text" placeholder="Subject" name="subject" style="width: 350px;background-color:rgba(0, 0, 0, .2);color:black;" required /><br>
            <textarea id="txtArea" placeholder="Message" name="mess" rows="40" cols="70" style="height: 15em;width:350px;background-color:rgba(0, 0, 0, .2);color:black" required></textarea>
			<br><br>
			<input id="button" type="submit" value="Submit" name="save" class="btn btn-block btn-primary" style="height:35px; width:250px" onclick="return confirm('Please review the form before submiting!')"  />
            	</td>
            	</tr>
            </table>
            <br><br>
<?php
  }
?>
</div>
<br>


	<?php include('footer.php') ?>

</body>
</html>