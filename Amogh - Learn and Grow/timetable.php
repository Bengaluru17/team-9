<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SriHarsha S">

    <title>SJCE CS | Timetable</title>
	
    <!-- Theme CSS -->
    <link href="css/base_styles.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<style>
	#timetable th, 
	#timetable td {
		font-size:10px !important;
	}
	</style>
</head>
<body>
	<div id="mainPart">
		<header>
			<div class="head-content">
				<img src="images/SJCE_Final.png"/>
				<h4>JSS Mahavidyapeetha</h4>
				<h2>Sri Jayachamarajendra College of Engineering</h1>
				<h3>A Commitment to Technical Education</h3>
				<hr style="width:40%;">
				<h1>Department of Computer Science and Engineering</h2>
			</div>
		</header>
		<!-- Navigation -->
		<nav class="x-nav">
			<ul class="nav-custom">
				<li class="nav-item"><a href="index.html">Home</a></li>
				<li class="nav-item"><a href="faculty.html">Faculty</a></li>
				<li class="nav-item"><a href="courses.html">Courses</a></li>
				<li class="nav-item nav-active"><a href="timetable.html">Timetable</a></li>
				<li class="nav-item"><a href="events.html">Events</a></li>
				<li class="nav-item"><a href="facilities.html">Facilities</a></li>
				<li class="nav-item"><a href="achievements.html">Achievements</a></li>
				<li class="nav-item"><a href="alumni.html">Alumni</a></li>
				<li class="nav-item"><a href="contact.html">Contact Us</a></li>
			</ul>
		</nav>
		<div id="page_heading">
			<p>Timetable</p>
		</div>
		<div id="bread_crumbs">
			<p>Timetable > Calender of Events</p>
		</div>
		<!-- Main Content -->
		<div class="container">
			<div class="sidenav">
				<div class="panel-header-silver">
					<h2>LIST OF TIMETABLES</h2>
				</div>
				<div class="sidenav-item sidenav-active" data-tab="CalenderYear">
					Calender of Events
				</div>
				<div class="sidenav-item" data-tab="FirstYear" >
					First Year
				</div>
				<div class="sidenav-item" data-tab="FirstYear">
					Second Year
				</div>
				<div class="sidenav-item" data-tab="FirstYear">
					Third Year
				</div>
				<div class="sidenav-item" data-tab="FirstYear">
					Fourth Year
				</div>
				
			</div>
			<div class="center_content">
				<div id="CalenderYear" class="content_panel">
					<div class="panel-header-blue">
						<h2>Calender of Events</h2>
					</div>
					<div style="padding:20px;">
						<p style="padding:0px 10px 10px 10px;">CALENDAR OF EVENTS – Odd Semester 2015-16
						for I, III, V, VII, Semesters BE and III, V Semesters MCA Programs</p>
						<br>
						<table id="calendar">
							<tr>
								<th>Date</th>
								<th colspan="3">Event</th>
							</tr>
							<tr>
								<td>01-Aug-2015</td>
								<td>Commencement of odd semester 2015-16 / Fresher’s Day celebrations</td>
							</tr>
							<tr>
								<td>15-Aug-2015</td>
								<td>Holiday – Independence Day</td>
							</tr>
							<tr>
								<td>29-Aug-2015</td>
								<td>Holiday – Swamiji Jayanti</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="FirstYear" class="content_panel" style="display:none;">
					<div class="panel-header-blue">
						<h2 id="yearhead">First Year Timetable</h2>
					</div>
					
					<div style="padding:20px;">
						Section: CS A <br>Room No: CS101<br><br>
						<table id="timetable">
							<tr>
							 <td align="center">
							 <td>7:30-8:30
							 <td>8:30-9:30
							 <td>9:30-10:30
							 <td>10:30-11:00
							 <td>11:30-11:50
							 <td>11:50-12:40
							 <td>12:40-1:30
							 <td>1:30-2:30
							 <td>2:30-3:30
							 <td>3:30-4:30
							 <td>4:30-5:30
							</tr>
							<?php
							include('php/config.php');
                            require_once "php/variables.php";
							$result = mysqli_query($db, "SELECT * FROM $tbl_tt_daily where secid=101;");
							
							 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
							 {
								  echo "<tr>";
								  echo "<td align=\"center\">".$row['day'];
								 for($i=2;$i<=10;){
									 if($row[$i] == $row[$i+1] == $row[$i+2])
										 $count = 3;
									 elseif($row[$i] == $row[$i+1])
									     $count = 2;
									 else $count = 1;
										
									echo "<td align=\"center\" colspan=\"$count\">".$row[$i];
									
									$i=$i+$count;
									
									if($i == 5 || $i == 8)
									{
										echo "<td>";   //space for tea or lunch break 
									}
								 }
								 echo "<\tr>";
							 }
							
							?>
							
						</table>
						<br>
						<hr>
						Section: CS B<br>Room No: CS102<br><br>
						<table id="timetable">
							<tr>
							 <td align="center">
							 <td>7:30-8:30
							 <td>8:30-9:30
							 <td>9:30-10:30
							 <td>10:30-11:00
							 <td>11:30-11:50
							 <td>11:50-12:40
							 <td>12:40-1:30
							 <td>1:30-2:30
							 <td>2:30-3:30
							 <td>3:30-4:30
							 <td>4:30-5:30
							</tr>
							<tr>
							 <td align="center">MONDAY
							</tr>
							<tr>
							 <td align="center">TUESDAY
							</tr>
							<tr>
							 <td align="center">WEDNESDAY
							</tr>
							<tr>
							 <td align="center">THURSDAY
							</tr>
							<tr>
							 <td align="center">FRIDAY
							</tr>
							<tr>
							 <td align="center">SATURDAY
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->
		<footer>
			<div class="footrow">
				<div class="foot">
					<div class="quarter-width">
						<p style="color:#fff;">Address</p>
						<hr>
						<div>
							Golden Jubliee Bhavan,Sri Jayachamarajendra College of Engineering, JSS TI Campus, Manasagangotri, Mysore -570006
							<hr>
							Phone: 0821- 2548285, 2548286, 2548289
							<hr>
							Email: <a href="mailto:admn@sjce.ac.in">admn@sjce.ac.in</a>
						</div>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Quick Links</p>
						<hr>
						<a href="http://sjceplacements.org">SJCE Placements</a><br>
						<a href="http://lccsjce.org">LCC SJCE</a><br>
						<a href="http://sjce.ac.in">SJCE Official Website</a><br>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Follow Us</p>
						<hr>
						<div id="social2">
                            <div class="sc-icn2">
                                <a href="https://www.facebook.com/SJCE.Mysore.India" target="_blank"><img src="images/social/facebook.png" width="50px" height="50px" alt="facebook" title="SJCE Mysuru"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.twitter.com/@jcedboard" target="_blank"><img src="images/social/twitter.png" width="50px" height="50px" alt="twitter" title="@JCEdBoard"></a>
                            </div>
                            <div class="sc-icn2">
                                <a href="https://www.instagram.com/sjce_photography/" target="_blank"><img src="images/social/instagram2.png" width="50px" height="50px" alt="instagram" title="SJCE Photography"></a>
                            </div>
                        </div>
					</div>
					<div class="quarter-width">
						<p style="color:#fff;">Report</p>
						<hr>
						<a href="#">Found a Bug</a><br>
						<a href="#">Feedback</a><br>
						<a href="#">Request feature</a><br>
					</div>
				</div>
			</div>
			<div class="footrow2">
				<div class="foot">
					<div class="half-width">
						<p class="foot-p">&copy; SJCE Mysore - 2017 | All rights reserved</p>
					</div>
					<div class="half-width">
						<p style="float:right !important;" class="foot-p">Developed &amp; maintained "Code Ninjas"</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/timetable.js"></script>
	</div>
</body>

</html>
