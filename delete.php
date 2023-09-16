
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: orangered;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}</style></head>
 <body>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="form.php">Form</a>
  <a href="report.php">Report</a>
  
</div>
<div style="width: 100%;height: 100px;background-color: black;color: white;text-align: center;"><?php 

include ('connection.php');

$id = $_GET['id'];
$sql ="DELETE FROM `mrcreport` WHERE id='$id'";

$data = mysqli_query($con,$sql);

if ($data) {
	echo "deleted";
	header('location:report.php');
}else
{
	echo "error";
}

 ?></div>
</body></html>