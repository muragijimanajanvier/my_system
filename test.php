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
        // Check if the old name is correct
        if ($izina_kera !== $row["amazina"]) {
            echo '<script>alert("Izina rya kera si ryo, ongera ugerageze!")</script>';
        } 
        // Verify the old password with hashed password in the database
        elseif (!password_verify($ibanga_kera, $row["ibanga"])) {
            echo '<script>alert("Ijambo ry\'ibanga rya kera si ryo, ongera ugerageze!")</script>';
        } 
        // Make sure the new name is different from the old one
        elseif ($izina_rishya === $izina_kera) {
            echo '<script>alert("Izina rishya rigomba gutandukana n\'irya kera!")</script>';
        } 
        // Make sure the new password is different from the old one
        elseif ($ibanga_rishya === $ibanga_kera) {
            echo '<script>alert("Ijambo ry\'ibanga rishya rigomba gutandukana n\'irya kera!")</script>';
        } 
        // Ensure the new password and confirm password match
        elseif ($ibanga_rishya !== $ibanga_rishya_confirm) {
            echo '<script>alert("Ijambo ry\'ibanga ntirishyitse, ongera ugerageze!")</script>';
        } else {
            // Hash the new password before saving to the database
            $hashed_password = password_hash($ibanga_rishya, PASSWORD_DEFAULT);
            
            // Update the name and password
            $stmt = $conn->prepare("UPDATE umuhinzi SET amazina = ?, ibanga = ? WHERE id = ?");
            $stmt->bind_param("ssi", $izina_rishya, $hashed_password, $id);
            
            if ($stmt->execute()) {
                echo '<script>alert("Imyirondoro yahinduwe neza!")</script>';
            } else {
                echo '<script>alert("Habaye ikibazo mu guhindura imyirondoro.")</script>';
            }
            $stmt->close();
        }
    } else {
        echo '<script>alert("Umutekano w\'uburyo bwo guhindura ntibuziguye!")</script>';
    }
    
    $conn->close();
}
?>
