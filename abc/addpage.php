<!DOCTYPE html>
<html>
<head>
	<title>add page</title>

	<style type="text/css">
		
body{
	margin:0;
	padding: 0;
	background-color: #20B2AA;
}
.card{
	width:85%;
	max-width: 600px;
	background: #E0FFFF;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%, -50%);
	padding: 30px 40px;
	box-sizing: border-box;
	border-radius: 8px;
	text-align: center;
	box-shadow: 0 0 20px #000000b3;
	font-family: acme;
}
.card h1{
	margin: 0px ;
	font-weight: 140px;


}
.txtb{
	border: 1px solid grey;
	margin: 8px 0px;
	padding: 12px 18px;
	border-radius: 8px;
}
.txtb label{
	display: block;
	text-align:left;
	color:black;
	font-size: 14px;

}
.txbt input{
	width:100%;
	border:none;
	background: none;
	outline: none;
	font-size: 18px;
	margin-top: 6px;
}
.btn{
	display: block;
	background: #F08080;
	padding: 14px 0;
	color:white;
	text-transform: uppercase;
	cursor: pointer;
	margin-top: 8px;
	width:100%;
}
#button{
	
  background-color: transparent;
	border: none;
	font-family: Acme;
	text-align: center;
	text-transform: uppercase;
	font-weight: bold;
	line-height: 30px;
	border: 3px solid #E0FFFF ;
	color: white;
	float:left;
	margin-left: 30px;
	margin-top: 20px;
	bottom:30px;
	right:30px;
	
}
 #button a{
 	text-decoration: none;
 	color:white;
	
	/*justify-content: center;
	text-align: center;
	color:white;*/
}


	</style>
</head>
<body>
	<button type="button" id="button"><a href="place.html">Back to Home</a></button>
	<div class="card">
		<form>
	<h1>Add  New Contact</h1>

	<div class="txtb">
		<label>Full Name</label>
		<input type="text" name="name" placeholder="Enter your name">
	</div>

	<div class="txtb">
		<label>DOB</label>
		<input type="Date" name="DOB" placeholder="dd/mm/yyyy">
	</div>

	<div class="txtb">
		<label>Mobile Number</label>
		<input type="text" name="no" placeholder="+91 XXXXXXXXXX">
	</div>

	<div class="txtb">
		<label>Email</label>
		<input type="Email" name="Email" placeholder="abc@gmail.com">
	</div>
	<a class="btn">Save</a>
</form>




</div>
<script type="text/javascript">
	function addcontact() {
		// body...
	}
</script>


</body>
</html>