
<?php
session_start();
// if (!isset($_SESSION['amazina'])) {
//     header("Location: login.php");
//     exit();
// }
?>
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

    .logout-btn {
      position: absolute; /* Icyo dukoresha kugira ngo tuyishyire hejuru iburyo */
      top: 20px; /* Intera ivuye hejuru */
      right: 20px; /* Intera ivuye iburyo */
      background-color: #4CAF50; /* Ibara rya button (icyatsi) */
      color: white; /* Ibara ry'amagambo */
      border: none; /* Gukura umurongo ku mbibi */
      padding: 10px 20px; /* Intera imbere muri button */
      font-size: 16px; /* Ingano y'inyuguti */
      border-radius: 5px; /* Gukoraho uruziga ku mpande */
      cursor: pointer; /* Hand icon igihe ukanda */
      transition: background-color 0.3s ease; /* Animation yo guhindura ibara */
    }

    .logout-btn:hover {
      background-color: #45a049; /* Ibara button ihindukaho igihe uyikozemo */
    }
  </style>
</head>
<body>
<button class="logout-btn"><a href="logout.php" style="text-decoration: none">Sohoka</a></button>
    <table class="data-table">
        <caption>Urutonde rw'Ibicuruzwa</caption>
        <thead>
            <tr>
             <td>amazina yumuhinzi</td>
             <td>ibicuruzwa/ibihingwa</td>
	<td>ibiciro by' ibicuruzwa</td>
	<td>ingano yi bicuruzwa(kg)</td>
	<td>umurenge</td>
	
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
		echo "</tr>";
	}
?>
        </tbody>
    </table>
</body>
</html>
