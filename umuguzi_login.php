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
    $stmt = $conn->prepare("SELECT id, amazina, ibanga FROM umuguzi WHERE amazina = ?");
    $stmt->bind_param("s", $amazina);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Verify password (Make sure to hash passwords in database)
        if ($ibanga === $row["ibanga"]) { 
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: select2.php");
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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buyer Login</title>
  <link rel="stylesheet" href="umuguzi_login.css">
</head>
<body>
  <center>
  <p style="background-color: green;position: 10px;display: flex;position: relative;padding: 10px;width: 140px; "> <a href="page2.php" style="text-decoration: none">garuka inyuma</a></p>
  <div class="login-container">
    <h1>Kwinjira kwa Muguzi</h1>
    <form method="POST" autocomplete="off">
      <div class="form-group">
        <label for="email">Amazina yawe</label>
        <input type="text" id="username" name="a" placeholder="Injiza amazina yawe" required>
      </div>
      <div class="form-group">
        <label for="password">Ijambo banga ryawe</label>
        <input type="password" id="password" name="b" placeholder="Injiza ijambo banga ryawe" required>
      </div>
      <button type="submit" name ="ok" class="login-button">Injira</button><br><br>
       <a href="change_umuguzi.php" style="background-color: green;padding: 7px;">hindura imyirondoro</a><br><br>
      <p class="signup-link" ">Nta konte ufite? <a href="fungura_umuguzi.php">Iyandikishe hano</a></p>
    </form>
  </div>
  </center>
</body>
</html>
