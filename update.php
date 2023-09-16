 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <style type="text/css">

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
.formdiv{
padding-left: 25%;
padding-top: 25px;
}


 	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
  .formdiv{
  	padding-left: 0;
padding-top: 0;
}

  }
}
 </style>
 <body>
 	<div class="topnav">
  <a href="index.php" >Home</a>
  <a class="active" >Form</a>
  <a href="report.php">Report</a>
  
</div>


<div class="formdiv"> 

 	  <div class="container" >
    <div class="title">Vehical-Entry-Form</div>
    <div class="content">
      <div style="padding-top: 10px;color: green;font-weight: bolder;"> 

      <?php 
error_reporting(0);
include ('connection.php');
if ($_GET['s'])
{

  $id = $_GET['id'];
  $number = $_GET['number'];
  $drivername = $_GET['drivername'];
  $time = $_GET['time'];
  $date = $_GET['date'];
  $place = $_GET['place'];
   $loadone = $_GET['loadone'];
  $loadtwo = $_GET['loadtwo'];
  $status = $_GET['status'];
  
  $sql="UPDATE mrcreport SET number='$number' , drivername='$drivername', time='$time' , date='$date', place='$place', loadone='$loadone' , loadtwo='$loadtwo', status='$status'   WHERE id='$id'";
  $data=mysqli_query($con, $sql);
    
  if ($data) {
    //echo "record update";
    header('location:report.php');
  }
  else{
    echo "not update";
  }
}
 
?>
</div>
 
      <form action="" method="get">

        <div class="user-details">
           <div class="input-box">

           <input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>" >
         </div>
          <div class="input-box">
            <span class="details">Vehical Number</span>
            <input type="text" name="number" value="<?php echo $_GET['number']; ?>" placeholder="Enter Vehical Number" required>
          </div>
          <div class="input-box">
            <span class="details">Driver Name</span>
            <input type="text" name="drivername" value="<?php echo $_GET['drivername']; ?>" placeholder="Enter Driver Name" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" name="time" value="<?php echo $_GET['time']; ?>" placeholder="Enter Time" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" value="<?php echo $_GET['date']; ?>" placeholder="Enter Date" required>
          </div>
          <div class="input-box">
            <span class="details">Place</span>
            <input type="text" name="place" value="<?php echo $_GET['place']; ?>" placeholder="Enter Place" required>
          </div>
          <div class="input-box">
            <span class="details">Load One</span>
            <input type="Number" name="loadone" value="<?php echo $_GET['loadone']; ?>" placeholder="Enter Load one" required>
          </div>
           <div class="input-box">
            <span class="details">Load Two</span>
            <input type="Number" name="loadtwo" value="<?php echo $_GET['loadtwo']; ?>" placeholder="Enter Load two" required>
          </div>
          <div class="input-box" style="width:100%;">
          	<span class="details">Status</span>
          	<select class="input-box" name="status" style="height: 45px;font-weight: bolder;">
          		<option hidden><?php echo $_GET['status']; ?></option>
          		<option>IN</option>
          		<option>Out</option>
          	</select>
           </div>
        </div>
       
        <div class="button">
          <input type="submit" name="s" value="update" >
        </div>
      </form>
    </div>
  </div>
</div> 


  
 </body>
 </html>

