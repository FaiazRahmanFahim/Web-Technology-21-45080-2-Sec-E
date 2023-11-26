<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="../../js/myJobSearch.js"></script>
		<title>Job Search</title>
	</head>
	<body style="background-color:gray;">
		<div style="display: flex; border-radius: 10px;">
		<?php
		include_once("Dashboard.php");
		?>
		<div style="margin-top: 55px; margin-left: 05px; width: 800px; border-radius: 10px;">
		<table align="center" width="800px" style="color: black;">
			<tr>
				<td>
					<div style="background-color: aliceblue; padding: 50px; color:black; border-radius: 10px; font-family:Verdana, Geneva, Tahoma, sans-serif;">
						<table width="800px">
							<!-- <form action="../../controller/myJobSearchControl.php" type="POST" onsubmit=" return myJobSearchValidation();"> -->
								<tr>
									<td style="background-color: white; border-radius: 10px;">
										<legend style="background-color:cadetblue; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 10px; 
											text-align:center;">Catagory
										</legend><br>
										<center>
											<select name="category" id="category" style="font-size:16px; padding: 5px 20px; border-radius: 5px;">
												<option value="" selected>Select a Type</option>    
												<option value="Accounting">Accounting</option>
												<option value="Banking">Banking</option>
												<option value="Development">Development</option>
												<option value="Insurance">Insurance</option>
												<option value="IT">IT</option>
												<option value="Healthcare">Healthcare</option>
												<option value="Marketting">Marketting</option>
												<option value="Management">Management</option>
												<option value="Generalmanagment">Generalmanagment</option>
												<option value="Medical">Medical</option>
												<option value="Garments">Garments</option>
												<option value="Engineer">Engineer</option>
												<option value="Bank/Non-Bank Fin. Institution">Bank/Non-Bank Fin. Institution</option>
												<option value="Beautycare">Beautycare</option>
												<option value="Education">Education</option>
												<option value="Tourism">Tourism</option>
												<option value="Security">Security</option>
												<option value="Supplychain">Supplychain</option>
												<option value="Research">Research</option>
												<option value="Receptionist">Receptionist</option>
												<option value="Dataentry">Dataentry</option>
												<option value="Others">Others</option>
											</select>
										</center>
									</td>
									<td style="background-color: white; border-radius: 10px;">
										<legend style="background-color:cadetblue; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 10px; 
											text-align:center;">Type
										</legend><br>
										<center>
											<select name="type" id="type" style="font-size:16px; padding: 5px 20px; border-radius: 5px;">
												<option value="" selected>Any Type</option>
												<option value="full-time">Full-Time</option>
												<option value="part-time">Part-Time</option>
												<option value="internship">Internship</option>
											</select>
										</center>
									</td>
									<td style="background-color: white; border-radius: 10px;">
										<legend style="background-color:cadetblue; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 10px; 
											text-align:center;">Salary
										</legend><br>
										<center>
											<select name="salary" id="salary" style="font-size:16px; padding: 5px 20px; border-radius: 5px;">
												<option value="" selected>Any Salary</option>
												<option value="< 10000"> < $10000 </option>
												<option value="10000 to 25000">$10000 - $25000</option>
												<option value="25000 to 50000">$25000 - $50000</option>
												<option value="50000 to 65000">$50000 - $65000</option>
												<option value="65000 to 80000">$65000 - $80000</option>
												<option value="80000 to 95000">$80000 - $95000</option>
												<option value="95000 >"> $95000 > </option>
											</select>
										</center>
									</td>
									<td style="background-color: white; border-radius: 10px;">
										<legend style="background-color:cadetblue; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 10px; 
											text-align:center;">Experience
										</legend><br>
										<center>
											<select name="experience" id="experience" style="font-size:16px; padding: 5px 20px; border-radius: 5px;">
												<option value="" selected>Any Experience</option>
												<option value="< 1"> < 1 year </option>
												<option value="1 to 3">1 - 3 year(s)</option>
												<option value="3 to 5">3 - 5 years(s)</option>
												<option value="5 to 7">5 - 7 years(s)</option>
												<option value="7 to 10">7 - 10 years(s)</option>
												<option value="1 >"> 10 > year </option>
											</select>
										</center>
									</td>
									<td colspan="5" style="background-color: white; border-radius: 10px;">
										<legend style="background-color:cadetblue; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 10px; 
											text-align:center;">Location
										</legend><br>
										<center><input type="text" name="location" id="location" value=""
										style="font-size:16px; padding: 5px 20px; border-radius: 5px;" placeholder="e.g: Dhaka, Chaittagong, Sylhet"></center>
									</td>
								</tr>
								<tr>
									<td colspan="7" align="center" style="padding-top: 15px;">
										<input type="submit" value="Search" onclick="myJobSearchValidation()" style="background-color:green; color: white; font-size: 20px; 
											text-decoration: none; padding: 10px 20px; border-radius: 15px; 
											text-align:center; cursor:pointer;">
									</td>
								</tr>
							<!-- </form> -->
						</table>
					</div>
				</td>
			</tr>
			<tr align="center">
				<td style="background-color: aliceblue; color:black; border-radius: 10px;">
					<div id="searchResults" style="background-color:white; width: 1000px; height: 200px;  border-radius: 10px;">
						
					</div>
				</td>
			</tr>
		</table>
		</div>
		</div>
	</body>
</html>
