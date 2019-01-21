<!DOCTYPE html>
<html>
<head>
	<title>Girnar Website</title>
	<meta charset="UTF-8">
	<link href="css/index.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php include('header.php') ?>

<?php
  	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"girnar");
?>

<div class="hostel-image" style="background-image: url('img/background-image.jpg');">
				<!--<img class="hostel-image" src="img/background-image.jpg" style="height: 20%;">-->
				<div class="iit-heading">IIT DELHI</div>
				<div class="girnar-heading"><span class="with-border">GI</span>RNAR HOSTEL</div>
				<div class="cub">The Cub has grown ...</div>
				<div class="events-button"><div class="events-text">Check Events</div></div>			
</div>

<div class="blank" style="height:10px;"></div>
		    <div class="img-txt" style="width:100%; height:370px">
		    	<table style="width: 100%">
		            <tr align="center">
		                <td style="width:1%"></td>
		    			<td style="width:25%">
		    		<div style="text-align:center">
		    		<img src="img/facilities.png" class="facilities">
		    		<br><br><d style="color: #e85b5b;font-family: monospace;font-size: 200%;font-weight: bold;">Great Facilities</d>
		    		<br>Sports, Gym, TV room, TT tables and Badminton Courts make our Hostel a fantastic place to learn and enjoy.
		    	</div></td>
		    	<td style="width:2%"></td>
		    			<td style="width:25%">
		    	<div style="text-align:center">
		    		<img src="img/surroundings.png" class="surroundings">
		    		<br><br><d style="color: #e85b5b;font-family: monospace;font-size: 200%;font-weight: bold;">Surroundings</d>
		    		<br>The hostel is at the best location considering the proximity to food outlets and nearness to academic area.
		    	</div></td>
		    	<td style="width:2%"></td>
		    			<td style="width:25%">
		    	<div style="text-align:center">
		    		<img src="img/acco.png" class="acco">
		    		<br><br><d style="color: #e85b5b;font-family: monospace;font-size: 200%;font-weight: bold;">Accomodation</d>
		    		<br>Rooms have enough amount of space and furniture for the students to sleep and study well.
		    	</div></td>
		    </tr>
		</table>
		    	
		    </div>
		    <table>
		    	<tr><th class="BRCA" colspan="3"><h1>BRCA Representatives</h1><br></th></tr>
		    	<tr>
		    		<td class="rows">Dance: </td>
		    		<td class="rows">FACC: </td>
		    		<td class="rows">Music: </td>
		    	</tr>
		    	<tr>
		    		<td class="rows">Debating:</td>
		    		<td class="rows">Hindi Samiti: </td>
		    		<td class="rows">PFC: </td>
		    	</tr>
		    	<tr>
		    		<td class="rows">Dramatics:</td>
		    		<td class="rows">Literary:</td>
		    		<td class="rows">Quizzing:</td>
		    	</tr>
		    </table>
		    <br>
		    <br>
		    <br>
		    <br>
<!--

		    <div class="query-calendar" style="margin-bottom: 500px;">
			<span class="query">
				<h1 class="query-head">Any Queries/Complaints</h1>
				<table>
					<tr>
						<td><input type="text" placeholder="Write here..." class="enter-query"></input></td>
						<td><p class="search-button">Search</p></td>
					</tr>
				</table>
				<p  class="mail">Or do any of the following:
					<ul>
						<li  class="mail">Mail to girnarhouse.iitd@gmail.com</li>
						<li  class="mail">Report on Facebook page</li>
					</ul>
				</p>
			</span>
			<div></div>
			<span class="calendar">
				<h1 class="meeting">Meetings</h1>
				<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=en.indian%23holiday%40group.v.calendar.google.com&amp;color=%232F6309&amp;ctz=Asia%2FKolkata" style="border-width:0" frameborder="0" scrolling="no""></iframe>
				<p class="contact">
					Contact:<br> Nishant: 9314733783<br> Shashank: 7840048450 
				</p>
			</span>
		</div>
-->

		<div class="notice-board">
			<table style="width: 100%">
            <tr align="center">
                <td>
                    <table style="width: 1260px">
                        <tr>
                            <td style="padding-top: 0px; width:80%">
                            	<h1>Notice Board</h1>
                            </td>
                            <td style="padding-top: 0px; width:20%">
                            </td>
                        </tr>

                        <?php    
			               $ch1 = "select * from notices ORDER BY date DESC";
			               $query1 = mysqli_query($con,$ch1);
                       	?>
                       	<?php while ($ty = mysqli_fetch_array($query1)){ ?>
                        <tr>
                        <ul>
                        <th style="text-align: left"><li><?php echo $ty[2]?></li></th>
                        </ul>
                        <th><?php echo $ty[3]?></th	>
                    </tr>
                    <?php } ?>
                   </table>
                </td>
            </tr>
        </table>
		</div>

<div class="blank" style="height:10px;"></div>
<?php include('footer.php') ?>
</body>
</html>