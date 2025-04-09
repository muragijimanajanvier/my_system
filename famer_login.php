<?php
session_start();
?>


<!DOCTYPE html>
<html lang="rw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kwinjira - Umuhinzi</title>
  <link rel="stylesheet" href="farmer-login.css">
</head>
<body>
  <header>
    <h1>Urubuga rw'Umuhinzi</h1>
    <p>Injira mu rubuga rwawe kugira ngo ucuruze ibihingwa byawe.</p>
  </header>

  <main>
    <div class="login-container">
      <h2>Kwinjira</h2>
      <form action="#" method="POST">
        <label for="username">Izina ryawe:</label>
        <input type="text" id="username" name="username" placeholder="Andika izina ryawe" required>

        <label for="password">Ijambo ry'ibanga:</label>
        <input type="password" id="password" name="password" placeholder="Andika ijambo ry'ibanga" required>

        <button type="submit">Injira</button>
      </form>
      <p>Uracyafite ikibazo? <a href="farmer-signup.html">Iyandikishe hano</a>.</p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Urubuga rw'Umuhinzi. Uburenganzira bwose burabitswe.</p>
  </footer>
</body>
</html>
