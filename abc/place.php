
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="place.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>home page</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
	<div class="manue">
		<h3 id="a1">SH-WebPhone</h3>
	</div>
	<br>
	<br>
	<div class="s0">
	<div   rows="10" cols="100"  class="s1">

	<form action="/search.php" method="post">


		<input rows="10" cols="100"  id="u1" type="text" placeholder="Search.." name="search">
		<button id="u2" type="submit"><i class="fa fa-search"></i></button>
	</form>


	</div><br>
	<div   rows="10" cols="100" class="s2">
		<p id="s">Shiba Hussain</p>
		<i  id="u3" class='fas fa-caret-down' style='font-size:36px'></i>
		
	</div>
	<div class="s3">
		<i  id="u4" class='fas fa-caret-up' style='font-size:36px'></i>
		<br>
		<button onclick="fun();" id="b1">Remove</button>
	<button id="b2"><a href="edit.php">Edit</a></button>


	<div class="leftmanu">
			
		</div>
		
	</div>

	<div class="s4">

		<p id="amina">Amina Hussain</p>
		<i  id="u5" class='fas fa-caret-down' style='font-size:36px'></i>
		
	</div>
	<div class="s5">

		<p id="bogo">Abdullah Hussain</p>
		<i  id="u6" class='fas fa-caret-down' style='font-size:36px'></i>
		
	</div>
</div>
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="place.php">1</a>
  <a class="active" href="place.php">2</a>
  <a href="#">3</a>
  <a href="place.php">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

<div class="new">
	<button  id="plus"><a href="newbnd.php"><i class="fa fa-plus"></i></a><button>
</div>



</body>
</html>