<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">

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
}
 
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;

}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
 

</style>
<body>
		<div class="topnav">
  <a href="index.php" >Home</a>
  <a href="form.php" >Form</a>
  <a class="active">Report</a>
  
</div>

<?php 

include ('connection.php');
$sql ="select * from mrcreport";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);


if ($total=mysqli_num_rows($data)) {
	?>

<table >
  <caption style=" color: whitesmoke;">Vehical-Entry-Report</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehical Number</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Place</th>
      <th scope="col">Load One</th>
      <th scope="col">Load Time</th>
      <th scope="col">Status</th>
      <th scope="col">Option</th>

    </tr>
  </thead>
  <tbody>
  	<?php
	
	while ($result = mysqli_fetch_array($data)) {

		echo " 
    <tr>
      <td data-label=\"ID\">".$result['id']."</td>
      <td data-label=\"Vehical Number\">".$result['number']."</td>
      <td data-label=\"Driver Name\">".$result['drivername']."</td>
      <td data-label=\"Time\">".$result['time']."</td>
       <td data-label=\"Date\">".$result['date']."</td>
      <td data-label=\"Place\">".$result['place']."</td>
      <td data-label=\"Load One\">".$result['loadone']."</td>
      <td data-label=\"Load Two\">".$result['loadtwo']."</td>
      <td data-label=\"Status\">".$result['status']."</td>
      <td data-label=\"Option\"><a style=\"width: 100%;background-color: green;font-weight: bolder;color: whitesmoke;text-decoration: none;\" href='update.php?id=$result[id] & number=$result[number] & drivername=$result[drivername] & time=$result[time] & date=$result[date] & place=$result[place] & loadone=$result[loadone] & loadtwo=$result[loadtwo] & status=$result[status]'> update </a><br><br><a style=\"width: 100%;background-color: red;font-weight: bolder;color: whitesmoke;text-decoration: none;\" href='delete.php?id=$result[id] '>delete </a></td>

    </tr>

    ";
	}
}
else
{
 	echo "no record found";
}

?>
  
  </tbody>
</table>

</body>
</html>