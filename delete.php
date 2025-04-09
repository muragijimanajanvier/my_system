<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","system");
	$insert=mysqli_query($con,"delete FROM people WHERE id=$id");
	// header("location:retrieve.php");
	if($insert){
	?>
<script type="text/javascript">;
	alert("Urakoze gusiba");
	window.location="select_tanga.php";
</script>
<?php
}
else{
	echo"data deleted fail";
}
?>
</body>
</html>