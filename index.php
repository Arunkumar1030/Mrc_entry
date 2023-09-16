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
}
.grid-container {
  display: grid;
  column-gap: 50px;
  grid-template-columns: auto auto auto;
  background-color: transparent;
  padding: 10px;
  margin-top: 100px;

}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
   border-radius: 20px;
   border: none;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active">Home</a>
  <a href="form.php">Form</a>
  <a href="report.php">Report</a>
  
</div>
<div class="grid-container">
  <div class="grid-item">IN</div>
  <div class="grid-item">OUT</div>
  <div class="grid-item">Total</div>  
  <div class="grid-item">Count</div>
  <div class="grid-item">Count</div>
  <div class="grid-item">Count</div>  
  <div class="grid-item">1</div>
  <div class="grid-item">2</div>
  <div class="grid-item">9</div>  
</div>

 

</body>
</html>