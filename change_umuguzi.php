<?php
session_start();
$conn = new mysqli("localhost", "root", "", "system");

// Reba niba uri muri session
if (!isset($_SESSION["id"])) {
    die('<script>alert("Ntago wemerewe guhindura amakuru utinjiye.")</script>');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amazina_old = trim($_POST["amazina_old"]);
    $amazina_new = trim($_POST["amazina_new"]);
    $ibanga_old = trim($_POST["ibanga_old"]);
    $ibanga_new = trim($_POST["ibanga_new"]);
    $ibanga_confirm = trim($_POST["ibanga_confirm"]);

    // Reba niba ibanga rishya rihuye
    if ($ibanga_new !== $ibanga_confirm) {
        die('<script>alert("Ijambo ry\'ibanga rishya ntirihuye."); window.history.back();</script>');
    }

    $id = $_SESSION["id"];

    // Fata amazina n'ibanga bya mbere
    $stmt = $conn->prepare("SELECT id, amazina, ibanga FROM umuguzi WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Reba niba amazina ya kera ari yo
        if ($amazina_old !== $row["amazina"]) {
            die('<script>alert("Amazina ya kera si yo.");</script>');
        }

        // Reba niba ijambo ry'ibanga rya kera ari ryo
        if ($ibanga_old !== $row["ibanga"]) {
            die('<script>alert("Ijambo ry\'ibanga rya kera si ryo.");</script>');
        }

        // 🔴 Ntitugikoresha password_hash(), password ibikwa uko iri
        $ibanga_plaintext = trim($_POST["ibanga_new"]);

        // Hindura amazina n'ijambo ry'ibanga mu buryo busanzwe
        $stmt = $conn->prepare("UPDATE umuguzi SET amazina = ?, ibanga = ? WHERE id = ?");
        $stmt->bind_param("ssi", $amazina_new, $ibanga_plaintext, $id);

        if ($stmt->execute()) {
            echo '<script>alert("Amazina n\'ijambo ry\'ibanga byahinduwe neza!"); window.location="umuguzi_login.php";</script>';
        } else {
            echo '<script>alert("Habaye ikosa, ongera ugerageze."); window.location="umuguzi_login.php";</script>';
        }
    } else {
        echo '<script>alert("Ntago wabonetse muri database."); window.location="change_umuguzi.php";</script>';
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
    <title>Hindura Amazina n'Ijambo ry'Ibanga</title>
      <link rel="stylesheet" href="change_umuhinzi.css">
</head>
<body>
     <center>
<p style="background-color: green; position: top;  position: absolute; top: 5px;height: 50px;width: 200px;margin-top: 2px;white-space: 2px;"> <a href="page2.php" style="text-decoration: none;">garuka inyuma</a></p>
</center>
    <form method="POST" autocomplete="off">
        <h2>Hindura Amazina n'Ijambo ry'Ibanga</h2>
        
        <label>Amazina ya kera:</label>
        <input type="text" name="amazina_old" required>
        
        <label>Amazina mashya:</label>
        <input type="text" name="amazina_new" required>
        
        <label>Ijambo ry'ibanga rya kera:</label>
        <input type="password" name="ibanga_old" required>
        
        <label>Ijambo ry'ibanga rishya:</label>
        <input type="password" name="ibanga_new" required>
        
        <label>Subiramo ijambo ry'ibanga rishya:</label>
        <input type="password" name="ibanga_confirm" required>
        
        <button type="submit">Hindura Amazina n'Ijambo ry'Ibanga</button>
    </form>
</body>
</html>