

<?php
session_start(); // Start session

if (isset($_POST['ok'])) {
    $amazina = trim($_POST["a"]);
    $ibanga = trim($_POST["b"]);

    // Database connection
    $conn = new mysqli("localhost", "root", "", "system");

    // Check connection
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Secure SQL Query using Prepared Statements
    $stmt = $conn->prepare("SELECT id, amazina, ibanga FROM umuhinzi WHERE amazina = ?");
    $stmt->bind_param("s", $amazina);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Verify password (Make sure to hash passwords in database)
        if ($ibanga === $row["ibanga"]) { 
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location:select_tanga.php");
            exit();
        } else {
            echo '<script>alert("Ijambo ry\'ibanga si ryo, ongera ugerageze!")</script>';
        }
    } else {
        echo '<script>alert("Ntabwo wiyandikishije.")</script>';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kwinjira kwa Muhinzi</title>
  <link rel="stylesheet" href="umuhinzicss.css">
</head>
<body>
  <center>
<p style="background-color: green; position: top;  position: absolute; top: 5px;height: 50px;width: 200px;margin-top: 2px;white-space: 2px;"> <a href="page2.php" style="text-decoration: none;">garuka inyuma</a></p>
</center>
  <div class="signup-container">
  <div class="login-container">
    <h1>Kwinjira kwa Muhinzi</h1>
    <form action="umuhinzilogin.php" method="POST" autocomplete="OFF">
      <div class="form-group">
        <label for="username">Amazina Yawe</label>
        <input type="text" id="usernames" name="a" placeholder="Injiza amazina yawe" required>
      </div>
      <div class="form-group">
        <label for="password">Ijambo Ry'Ibanga</label>
        <input type="password" id="password" name="b" placeholder="Injiza ijambo ry'ibanga" required >
      </div>
      <button type="submit" name="ok" class="login-button">Injira</button> <br><br><br><br>
      <a href="change_umuhinzi.php" style="background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 1rem;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  width: 100%;
  text-decoration: none"> Hindura Amazina n'Ijambo ry'Ibanga </a><br><br>
      <p class="signup-link">Nta konti ufite? <a href="sinup_umuhinzi.php">Iyandikishe hano</a></p> 
    </form>
  </div>
</body>
</html>
