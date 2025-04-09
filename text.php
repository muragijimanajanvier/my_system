<?php
session_start(); // Start session

if (isset($_POST['change'])) {
    $id = $_SESSION["id"];
    $izina_kera = trim($_POST["old_name"]);
    $izina_rishya = trim($_POST["new_name"]);
    $ibanga_kera = trim($_POST["old_password"]);
    $ibanga_rishya = trim($_POST["new_password"]);
    $ibanga_rishya_confirm = trim($_POST["confirm_password"]);

    // Database connection
    $conn = new mysqli("localhost", "root", "", "system");

    // Check connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Fetch current user info
    $stmt = $conn->prepare("SELECT amazina, ibanga FROM umuhinzi WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($izina_kera !== $row["amazina"]) {
            echo '<script>alert("Izina rya kera si ryo, ongera ugerageze!")</script>';
        } elseif ($ibanga_kera !== $row["ibanga"]) {
            echo '<script>alert("Ijambo ry'ibanga rya kera si ryo, ongera ugerageze!")</script>';
        } elseif ($izina_rishya === $izina_kera) {
            echo '<script>alert("Izina rishya rigomba gutandukana n'irya kera!")</script>';
        } elseif ($ibanga_rishya === $ibanga_kera) {
            echo '<script>alert("Ijambo ry'ibanga rishya rigomba gutandukana n'irya kera!")</script>';
        } elseif ($ibanga_rishya !== $ibanga_rishya_confirm) {
            echo '<script>alert("Ijambo ry'ibanga ntirishyitse, ongera ugerageze!")</script>';
        } else {
            $stmt = $conn->prepare("UPDATE umuhinzi SET amazina = ?, ibanga = ? WHERE id = ?");
            $stmt->bind_param("ssi", $izina_rishya, $ibanga_rishya, $id);
            
            if ($stmt->execute()) {
                echo '<script>alert("Imyirondoro yahinduwe neza!")</script>';
            } else {
                echo '<script>alert("Habaye ikibazo mu guhindura imyirondoro.")</script>';
            }
            $stmt->close();
        }
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guhindura Imyirondoro</title>
  <link rel="stylesheet" href="umuhinzicss.css">
</head>
<body>
  <div class="login-container">
    <h1>Guhindura Amazina n'Ijambo Ry'Ibanga</h1>
    <form action="change_umuhinzi.php" method="POST" autocomplete="OFF">
      <div class="form-group">
        <label for="old_name">Izina Ry'akera</label>
        <input type="text" id="old_name" name="old_name" placeholder="Injiza izina rya kera" required>
      </div>
      <div class="form-group">
        <label for="new_name">Izina Rishya</label>
        <input type="text" id="new_name" name="new_name" placeholder="Injiza izina rishya" required>
      </div>
      <div class="form-group">
        <label for="old_password">Ijambo Ry'Ibanga Ry'akera</label>
        <input type="password" id="old_password" name="old_password" placeholder="Injiza ijambo ry'ibanga rya kera" required>
      </div>
      <div class="form-group">
        <label for="new_password">Ijambo Ry'Ibanga Rishya</label>
        <input type="password" id="new_password" name="new_password" placeholder="Injiza ijambo ry'ibanga rishya" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Emeza Ijambo Ry'Ibanga</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Subiramo ijambo ry'ibanga rishya" required>
      </div>
      <button type="submit" name="change" class="login-button">Hindura</button>
    </form>
  </div>
</body>
</html>
