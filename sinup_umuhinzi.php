
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style_sinup.css">
  <link rel="stylesheet" href="select.css">
</head>
<body>
  <center>
  <p style="background-color: green;position: 10px;display: flex;position: relative;padding: 10px;width: 140px; "> <a href="page2.php" style="text-decoration: none">garuka inyuma</a></p>
  </center>
  <div class="signup-container">
    <h2>Fungura konte y'umuhinzi</h2>
    <form  method="POST" autocomplete="off">
      <div class="form-group">
        <label for="name">Amazina yose</label>
        <input type="text" id="name" name="a" placeholder="Injiza amazina yawe yose" required>
        <label for="name">ijambo banga</label>
         <input type="password" id="name" name="b" placeholder="Injiza ijambo banga" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$" title="ijambo banga rigomba kuba rifite byibura inyuguti 8, ikabamo inyuguti nkuru, nto, ni imibare">
      </div>
      <div class="form-group">
        <label for="email">Emeri</label>
        <input type="email" id="email" name="c" placeholder="Injiza emeri yawe" required>
      </div>
      <div class="form-group">
        <label for="phone">Inomero y'atelephone</label>
        <input type="text" id="phone" name="d" placeholder="Injiza nemero ya telephone" required>
      </div>
       <div class="dropdown-container">
        <div>
      <label for="umurenge">Akarere</label>
      <select id="umurenge" name="e" required style="width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;">
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
      <button type="submit" name="ok">Fungura</button>
    </div> 
    </form>
  </div>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    $con=mysqli_connect("localhost","root","","system");
    $insert=mysqli_query($con,"INSERT INTO umuhinzi(amazina,ibanga,emeri,terefone,umurenge)VALUES('$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]')");

    IF($insert){
    ?>
    <script type="text/javascript">
    alert("Muhinzi urakoze kwiyandikisha ngaho kanda kwinjira");
    window.location="page2.php";
    </script>
    <?php
}
else{
    echo'<script>alert("data is not insert")</script>';
}
}
?>