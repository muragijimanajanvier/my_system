<?php
session_start();
?>

<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="tanga.css">
   
</head>
</head>
<body>
<p style="background-color: green; width: 100PX;height:60px;position: absolute;left:20PX;"> <a href="page2.php" style="text-decoration: none;">Gusubira ahabanza</a></p>
    
    <div class="container">
        <h1>UZUZA IYIFOMO</h1>
        <form method="POST" autocomplete="off">
            <label for="izina">Amazina yawe:</label>
            <input type="text" id="izina" name="a" required><br>

            <label for="ibicuruzwa">Ibicuruzwa/ibihingwa:</label>
            <input type="text" id="ibicuruzwa" name="b" required>

            <label for="ibiciro">Ibiciro by'ibicuruzwa:</label>
            <input type="text" id="ibiciro" name="c" required>

            <label for="ingano">Ingano y'ibicuruzwa:</label>
            <input type="text" id="ingano" name="d" required>
      <label for="umurenge">akarere</label>
      <select id="umurenge" name="e" required style= "width:100%;padding: 12px 15px;
    margin-bottom: 15px;
    font-size: 1em;
    border: 2px solid #b0bec5;
    border-radius: 10px; /* Rounded corners for inputs */
    background: #f9f9f9;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;">
        <option value="" disabled selected>Hitamo akarere</option>
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

            <label for="telefone">Numero ya terefone:</label>
            <input type="tel" id="telefone" name="f" required>
            <button type="submit" name="ok">Ohereza</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    $con=mysqli_connect("localhost","root","","system");
    $insert=mysqli_query($con,"INSERT INTO people(Amazina,Ibicuruzwa,Ibiciro,Ingano,umurenge,terefone) VALUES('$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]','$_POST[f]')");

    IF($insert){
    ?>
    <script type="text/javascript">
    alert("Muhinzi urakoze kuzuza imyirondoro");
    window.location="select_tanga.php";
    </script>
    <?php
}
else{
    echo'<script>alert("data is not insert")</script>';
}
}
?>