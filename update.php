
<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="tanga.css">
 
</head>
<body>
    <div class="container">
        <h1>Hindura Nimba haramakosa wari wakoze</h1>
        <?php
    $id=$_GET['id'];
$con=mysqli_connect("localhost","root","","system");
$select=mysqli_query($con," SELECT *FROM people WHERE id=$id");
$row=mysqli_fetch_array($select);
    ?>
        <form method="POST" autocomplete="off">
            <label for="izina">Amazina yawe:</label>
            <input type="text" id="izina" name="a" value="<?php echo $row[1]?>"><br><br>

            <label for="ibicuruzwa">Ibicuruzwa/ibihingwa:</label>
            <input type="text" id="ibicuruzwa" name="b" value="<?php echo $row[2]?>"><br><br>

            <label for="ibiciro">Ibiciro by'ibicuruzwa:</label>
            <input type="text" id="ibiciro" name="c" value="<?php echo $row[3]?>"><br><br>

            <label for="ingano">Ingano y'ibicuruzwa:</label>
            <input type="text" id="ingano" name="d" value="<?php echo $row[4]?>"><br><br>
              <div>
      <label for="umurenge">umurenge</label>
      <select id="umurenge" name="e" value="<?php echo $row[5]?>" style= "width:100%;padding: 12px 15px;
    margin-bottom: 15px;
    font-size: 1em;
    border: 2px solid #b0bec5;
    border-radius: 10px; /* Rounded corners for inputs */
    background: #f9f9f9;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;">
        <option value="" disabled selected>Hitamo Umurenge</option>
        <option value="gasabo">Gasabo</option>
        <option value="kicukiro">Kicukiro</option>
        <option value="nyarugenge">Nyarugenge</option>
        <option value="ruhango">Ruhango</option>
        <option value="nyamagabe">Nyamagabe</option>
        <option value="musanze">Musanze</option>
        <option value="rubavu">Rubavu</option>
        <option value="nyaruguru">Nyaruguru</option>
        <option value="rusizi">Rusizi</option>
        <option value="gicumbi">Gicumbi</option>
        <option value="karongi">Karongi</option>
        <option value="rulindo">Rulindo</option>
        <option value="nyanza">Nyanza</option>
        <option value="huye">Huye</option>
        <option value="burera">Burera</option>
        <option value="gisagara">Gisagara</option>
        <option value="bugesera">Bugesera</option>
        <option value="ngoma">Ngoma</option>
        <option value="kayonza">Kayonza</option>
        <option value="kirehe">Kirehe</option>
        <option value="nyagatare">Nyagatare</option>
        <option value="gatsibo">Gatsibo</option>
        <option value="rwamagana">Rwamagana</option>
      </select>

    </div>

            <label for="telefone">Numero ya terefone:</label>
            <input type="tel" id="telefone" name="f" value="<?php echo $row[6]?>"><br><br>
            <button type="submit" name="ok">hindura</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    
    $insert=mysqli_query($con,"UPDATE people SET Amazina='$_POST[a]',Ibicuruzwa='$_POST[b]',Ibiciro='$_POST[c]',Ingano='$_POST[d]',umurenge='$_POST[e]',terefone='$_POST[f]' WHERE id=$id");
     // header("location:retrieve.php");

 IF($insert){
    ?>
    <script type="text/javascript">
    alert("muhinzi guhindura byagenze neza!!");
    window.location="select_tanga.php";
</script>
    <?php
 }
 else{
    // echo'<script>alert("data is not update")</script>';
    echo" data is not updated";
}
}
?>
