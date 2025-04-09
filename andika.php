<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isoko ry'Ubuhinzi</title>
    <link rel="stylesheet" href="andika.css">
</head>
<body>

    <!-- Logo hejuru ibumoso -->
    <header>
        <a href="aha.php"> <img src="logo.png" alt="Home Logo" id="logo"></a>
        <h1>Isoko ry'Ubuhinzi</h1>
    </header>

    <!-- Button yo Reba Serivisi -->
    <button id="toggleContact">👨‍🌾 Reba Contact</button>

    <!-- Contact Section (Initially Hidden) -->
    <section id="contactSection" style="display: none;">
        <h2>Contact</h2>
        <p>Usanga dushaka kugufasha, twandikire cyangwa utuhamagare:</p>
        <p><a href="tel:+250789428439">📞 Hamagara: 0789428439</a> cyangwa <a href="tel:+250723959523">0723959523</a></p>
        <p>Ohereza ubutumwa kuri WhatsApp: <a href="https://wa.me/250789428439">0789428439</a></p>
        <p>Ohereza email kuri: <a href="mailto:mj6041551@gmail.com">mj6041551@gmail.com</a></p>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var contactSection = document.getElementById("contactSection");
            contactSection.style.display = "none"; // Hide the contact section initially

            document.getElementById("toggleContact").addEventListener("click", function() {
                if (contactSection.style.display === "none") {
                    contactSection.style.display = "block"; // Show the contact section
                } else {
                    contactSection.style.display = "none"; // Hide the contact section
                }
            });
        });
    </script>

</body>
</html>
