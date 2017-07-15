<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Doctor Details </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <style> 
		.header { background-color: #327a81;  color: white;  font-size: 1.5em;  padding: 1rem;  text-align: center;  text-transform: uppercase;}
		.table-users {  border: 1px solid #327a81;  border-radius: 10px;  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);  max-width: calc(100% - 2em); margin: 1em auto; overflow: hidden;  width: 800px;}
		table {  width: 100%;}
		table td, table th {  color: #2b686e;  padding: 10px;}
		table td { text-align: center;  vertical-align: middle;}
		table td:last-child {  font-size: 0.95em;  line-height: 1.4;  text-align: center;}
		table th { text-align: center; background-color: #daeff1;  font-weight: 300; }
		table tr:nth-child(2n) {  background-color: white; }
		table tr:nth-child(2n+1) {  background-color: #edf7f8;}
		.user-row {   margin-bottom: 14px;}
		.user-row:last-child {   margin-bottom: 0;}
		.dropdown-user {   margin: 13px 0;    padding: 5px;    height: 100%;}
		.dropdown-user:hover {    cursor: pointer; }
		.table-user-information > tbody > tr {   border-top: 1px solid rgb(221, 221, 221); }
		.table-user-information > tbody > tr:first-child {   border-top: 0;}
		.table-user-information > tbody > tr > td {   border-top: 0; }
		.toppad{ margin-top:20px;}
	</style>
  </head>
	<body style="background-color: RGBA(13, 70, 83, 0.78);">
		<div class="bg-color1">
			<nav class="navbar navbar-default" style="background-color: RGBA(13, 70, 83, 0.78); !important; border-color: RGBA(13, 70, 83, 0.78) !important;">
			  <div class="container">
			  	<div class="col-md-12">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				     <a href="#" style="text-decoration:none;" value="index"> <h3 class="white">Practice Fusion</h3> </a>
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class=""><a href="process.php" style="color: #fff;font-size:15px;">Go Back</a></li>
				        
				      </ul>
				    </div>
				</div>
			  </div>
			</nav>
			
		</div>

<?php
define('DB_USER',"root"); // db user
define('DB_PASSWORD',""); // db password
define('DB_DATABASE',"doctorrcmnd"); // database name
define('DB_SERVER',"localhost"); // db server address

if(isset($_POST["doctorName"])){
		$docName=$_POST["doctorName"];
}else{
	$docName = '';
}
if(isset($_POST["speciality"])){

$special=$_POST["speciality"];
}else{
	$special = '';
}
if(isset($_POST["location"])){

$location=$_POST["location"];
}else{
	$location = '';
}
$conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
$result=$conn->query("SELECT * from doctorinfo where doctor_first_name like '".$docName."';");

if($conn->connect_error)
{
	die("Error: Could not connect to the database");
}

if($result->num_rows>0)
{
	$response["doctors"]=array();
	while($row=$result->fetch_assoc())
	{
		$doctors=array();
		echo"
			
	<div class='container'>
    <div class='row'>
    </div>
        <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad' >
          <div class='panel panel-info'>
            <div class='panel-heading'>
              <h3 style='font-family: 'Raleway', sans-serif;' class='panel-title '>".$row["doctor_first_name"]." ".$row["doctor_last_name"]."</h3>
            </div>
            <div class='panel-body'>
              <div class='row'>
                <div class='col-md-3 col-lg-3' align='center'> <img alt='User Pic' src='http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png' class='img-circle img-responsive'> </div>
                 <div class=' col-md-9 col-lg-9'> 
                  <table class='table table-user-information'>
                    <tbody>
                      <tr>
                        <td>Speciality</td>
                        <td> ".$row["doctor_speciality_field"]."</td>
                      </tr>	
					   <tr>
                        <td>Gender</td>
                        <td> ".$row["doctor_sex_type"]."</td>
                      </tr>	
					 <tr>
                        <td>Degree:</td>
                        <td> ".$row["doctor_highest_degree"]."</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td> ".$row["doctor_phone_number"]."</td>
                      </tr>
					   <tr>
                        <td>Office Address:</td>
                        <td>".$row["doctor_office_address"]."</td>
                      </tr>
					   <tr>
                        <td>Office Location:</td>
                        <td>".$row["doctor_office_location"]."</td>
                      </tr>
					   <tr>
					   
                        <td>Age:</td>
                        <td>".$row["doctor_age"]."</td>
                      </tr>
					 <tr>
                        <td>Years of Experience</td>
                        <td> ".$row["doctor_prof_experience"]."</td>
                      </tr>
					   <tr>
                        <td>Language of Service</td>
                        <td> ".$row["doctor_language_of_service"]."</td>
                      </tr>
					  
                   </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
              
          </div>
        </div>
    </div>
				
							 
			 ";
	}
}
/*-------------------------------------------------Recommendation Query----------------------------------------------*/
$resultRec=$conn->query("SELECT  * from doctorinfo WHERE doctor_speciality_field = '".$special."' ORDER BY doctor_pos_ratings desc");



if($conn->connect_error)
{
	die("Error: Could not connect to the database");
}

if($resultRec->num_rows>0)
{
	$response["recc_doctors"]=array();
	echo"    
	<div class='table-users'>
		<div class='header'>Recommended Doctors</div>
			<table id='doctor_details_recc' class='display' cellspacing='0'>
			 <tr>
			   <th>First Name</th>
			   <th>Speciality</th>
			   <th>Gender</th>
			   <th>Phone No</th>
			   <th>Office Address</th>
			   <th>Office Location</th>
			   <th>Ratings</th>
			  </tr>
			   ";
	while($row=$resultRec->fetch_assoc())
	{
		echo"<tr>
				 
					<td> ".$row["doctor_first_name"]."</td>
					<td> ".$row["doctor_speciality_field"]."</td>
					<td> ".$row["doctor_sex_type"]."</td>
					<td> ".$row["doctor_phone_number"]."</td>
					<td> ".$row["doctor_office_address"]."</td>
					<td> ".$row["doctor_office_location"]."</td>
					<td> ".$row["doctor_pos_ratings"]."</td>
					
				 
			</tr>				 
			 ";
	}
	echo" 
	      </table>
		  </div>
		  <footer id='footer'>
	<div class='footer-line'>
			<div class='container'>
				<div class='row'>
					<div class='col-md-12 text-center'>
						© Copyright Ravi Teja Jidigam
                   
					</div>
				</div>
			</div>
		</div>
	</footer>
	      </body>
	      </html>";
}

?>