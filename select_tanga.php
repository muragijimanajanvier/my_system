

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Nziza</title>
    <link rel="stylesheet" href="select.css">
    <style>
    body {
      margin: 0;
      height: 100vh;
      background-color: #f9f9f9; /* Ibara rya background yose */
    }

   
 .container {
    background-color:;

    }
     #ok{
    display: flex;
    justify-content: space-around;
    padding: 15px; /* Space inside */
    margin: 15px; /* Space around */
}
   

  </style>
</head>
<body>
	<div class="container">
	<div id="ok">
<button style="background-color: #00796b;height: 35PX ;width:150PX;border-radius: 10px"><a href="tangaa.php" style="text-decoration: none;">ONGERAMO IBICURUZWA</a></button>
<button style="background-color: #00796b;height: 35PX ;width:150PX;border-radius: 10px"><a href="logout.php" style="text-decoration: none;">SOHOKA</a></button>
</div>
</div>

    <table class="data-table">
        <caption>Urutonde rw'Ibicuruzwa</caption>
        <thead>
            <tr>
             <td>amazina yumuhinzi</td>
             <td>ibicuruzwa/ibihingwa</td>
	<td>ibiciro by' ibicuruzwa</td>
	<td>ingano yi bicuruzwa(kg)</td>
	<td>akarere</td>
	<td>nemero yaterefone yumuhinzi</td>
	<td colspan="2">ibikorwa</td></tr>
        </thead>
        <tbody>
            <?php
$con=mysqli_connect("localhost","root","","system");
	$insert=mysqli_query($con,"SELECT *FROM people");
	while($row=mysqli_fetch_array($insert)){
		echo "<tr>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
echo "<td><a href='update.php?id=$row[0]' style='color:none;text-decoration:none'>Hindura<a/td>";
echo "<td><a href='delete.php?id=$row[0]' style='color:none;text-decoration:none'>Siba</td>";
		echo "</tr>";
	}
?>
        </tbody>
    </table>
</body>
</html>
