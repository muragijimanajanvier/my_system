<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isoko ry'Ubuhinzi</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>

    <!-- Logo hejuru ibumoso -->
    <header>
        <a href="aha.php"><img src="logo.png" alt="Home Logo" id="logo"></a>
        <h1>Isoko ry'Ubuhinzi</h1>
    </header>

    <!-- Button yo kwerekana Ibyerekeye -->
    <button id="toggleAboutUs">👨‍🌾 Reba Ibyerekeye</button>

    <!-- Ibyerekeye (About Us) -->
    <section id="aboutUsSection" style="display: none;">
        <h2>Ibyerekeye</h2>
        <p>Isoko ry'Ubuhinzi ni urubuga rwateguwe kugira ngo duhuzemo abahinzi n’abaguzi, duhuze amasoko ku buryo bworoshye kandi bunoze. Turashaka gufasha abahinzi kubona amasoko y’umusaruro wabo, tukabaha uburyo bwo kumenyekanisha ibihingwa, kugurisha umusaruro no kubona ibikoresho by’ubuhinzi bigezweho.</p>
        <p>Twiyemeje gufasha abahinzi by’umwihariko bato, kubona isoko ryagutse, kandi tukabahuza n’abaguzi bafite ubushake bwo kugura ibihingwa byiza ku giciro gikwiriye.</p>
        <p>Isoko ry'Ubuhinzi rigeza ku bahinzi amakuru ku biciro bihoraho ku masoko no kubafasha kugira uburyo bwo kubungabunga umusaruro wabo neza, kandi tubaha amahirwe yo kugera ku masoko ajyanye n’ubuhinzi bwabo.</p>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hisha Ibyerekeye (About Us) igihe cyose
            var section = document.getElementById("aboutUsSection");
            section.style.display = "none"; // Hisha Ibyerekeye muri default

            // Button yo kwerekana Ibyerekeye
            document.getElementById("toggleAboutUs").addEventListener("click", function() {
                if (section.style.display === "none") {
                    section.style.display = "block"; // Kwerekana Ibyerekeye
                } else {
                    section.style.display = "none"; // Guhisha Ibyerekeye
                }
            });
        });
    </script>

</body>
</html>
