<!DOCTYPE html>
<html>
<head>
<title>Super Ride Rental</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
	<nav class="navbar">
<img class="logo" src="logo.jpeg">

<ul>
<li><a class="active" href="index.php">Home</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Contact us</a></li>
<li><a href="#">Feedback</a></li>
</ul>

</nav>



		<div class="container">
			<div class="error"></div>
			<form id="frm-mobile-verification">
				<div class="form-heading">Verify your Mobile Number</div>
				
				<div class="form-row">
					<input type="number" id="mobile" class="form-input"
					placeholder="Enter the 10 digit mobile">
				</div>

				<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">
			</form>

		</div>
    <div class="center">
<h1></h1>
<h1>SUPER RIDE RENTAL</h1>
  <h2>'RIDE THE ROYAL'</h2>
</div>
</div>
			
		</div>
		
	</div>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>
</html>
<style>
  body{
  width:1500px;
  height:662px;
  
  background-image:url(woho.jpg);
  background-size: 1550px 810px;
  
  background-repeat:no-repeat;
  background-position:center;
}
.center h2{
    color:black;
    font-size: 70px;
    font-style: italic;
    font-weight: bold;
    margin-left: 40%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
	.logo{
  width: 100px;
  height: 70px;
  padding: 15px 80px;
  }
  .navbar{
  height: 80px;
  width: 100%;
  background: rgba(0,0,0,0.4);
  }
  .navbar ul{
  float: right;
  margin-right:10px;
}  
.navbar ul li{
  list-style: none;
  margin: 0px 8px;
  display: inline-block;
  line-height: 80px;
  }
  .navbar ul li a:hover {
  color:red;
}
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 25px;
  padding: 6px 13px;
  transition: .4s;
  font-family: sans-serif;
  }
  .center h1{
  color: black;
  font-size: 70px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 40%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  .btnSubmit {
    background: red;
    padding: 8px 20px;
    border: orange 1px solid;
    border-radius: 14px;
    width: 40%;
    color: #FFF;
    box-shadow: 0px 0px 2px 2px rgb(0,0,0);
}
.btnSubmit:hover{

}
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 70%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.form-input {
    padding: 10px 20px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 14px;
    border: #E0E0E0 1px solid;
}
.form-heading {
    font-size: 1.5em;
    margin-bottom: 30px;
    color:red;
}
@media screen and (max-width: 1500px) {
    body{
    width:1444px;
    height:900px;
    
    background-image:url(woho.jpg);
    background-size: 1480px 900px;
    
    background-repeat:no-repeat;
    background-position:center;
  }
  
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 65%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
} 
  }
  
  @media screen and (max-width: 1440px) {
  body {
    width:1360px;
    height:900px;  
  }
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 55%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 65px;
    font-style: italic;
    font-weight: bold;
    margin-left: 36%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 65px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 36%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  }
  @media screen and (max-width: 1350px) {
  body {
    width:1160px;
    height:900px;  
  }
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 65%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 65px;
    font-style: italic;
    font-weight: bold;
    margin-left: 39%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 65px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 39%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  }
  @media screen and (max-width: 1275px) {
  body {
    width:1120px;
    height:900px;  
  }
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 60%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 60px;
    font-style: italic;
    font-weight: bold;
    margin-left: 35%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 60px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 35%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  }
  @media screen and (max-width: 1120px) {
  body {
    width:1000px;
    height:900px;  
    
  }
.container{
	width: 350px;
    margin-top: 10%;
    margin-left: 62%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 60px;
    font-style: italic;
    font-weight: bold;
    margin-left: 28%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 60px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 28%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 16px;
  padding: 6px 13px;
  transition: .4s;
  font-family: sans-serif;
  }
  }
  @media screen and (min-width: 1770px) {
  body {
    width:1300px;
    height:900px; 
    background-size: 1770px 900px; 
  }
.container{
	width: 350px;
    margin-top: 10%;
    margin-left: 80%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 60px;
    font-style: italic;
    font-weight: bold;
    margin-left: 55%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 60px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left: 55%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 27px;
  padding: 6px 13px;
  transition: .4s;
  font-family: sans-serif;
  }
  .navbar{
  height: 80px;
  width: 130%;
  background: rgba(0,0,0,0.4);
  }
  }
  @media screen and (max-width: 1050px) {
  body {
    width:900px;
    height:900px;
    background-size:1250px 900px;
    
  }
.container{
	width: 350px;
    margin-top: 10%;
    margin-left: 63%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 44px;
    font-style: italic;
    font-weight: bold;
    margin-left: 22%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 44px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left:22%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  
  }
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 16px;
  padding: 6px 13px;
  transition: .4s;
  font-family: sans-serif;
  }
  .navbar{
  height: 80px;
  width: 100%;
  background: rgba(0,0,0,0.4);
  }
  }
  @media screen and (max-width: 950px) {
  body {
    width:900px;
    height:703px;  
    background-size: 1000px 810px; 
  }
.container{
	width: 350px;
    margin-top: 5%;
    margin-left: 50%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 44px;
    font-style: italic;
    font-weight: bold;
    margin-left: 18%;
    text-shadow: 4px 4px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 44px;
  font-style: italic;
  text-shadow: 4px 4px white;
  margin-left:18%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  }
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 14px;
  padding: 5px 9px;
  transition: .4s;
  font-family: sans-serif;
  }
  .navbar ul{
  float: right;
  margin-right:30px;
}  
  }
  @media screen and (max-width: 870px) {
  body {
      
    background-size: 860px 800px; 
  }
.container{
	width: 325px;
    margin-top: 5%;
    margin-left: 42%;
    box-sizing: border-box;
    border: blue 1px solid;
    background-color:rgba(62, 82, 71, 0.4) ;
    border-radius:14px ;
}
.center h2{
    color:black;
    font-size: 35px;
    font-style: italic;
    font-weight: bold;
    margin-left: 10%;
    text-shadow: 3px 3px white;
    width: 885px;
    margin-top: 10px;
    text-align:center;
    }
    .center h1{
  color: black;
  font-size: 35px;
  font-style: italic;
  text-shadow: 3px 3px white;
  margin-left:10%;
  font-weight: bold;
  width: 885px;
  text-align:center;
  }
  .navbar ul li a{
  text-decoration: none;
  color: white;
  font-size: 11px;
  padding: 4px 8px;
  transition: .4s;
  font-family: sans-serif;
  }
  .navbar ul{
  float: right;
  padding-right:60px;
}  
.navbar{
  height: 80px;
  width: 90%;
  background: rgba(0,0,0,0.4);
  }
  .logo{
  width: 90px;
  height: 60px;
  padding: 15px 50px;
  }
  }
</style>