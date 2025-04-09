<?php
session_start();
?>
<!DOCTYPE html>
<html lang="rw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isoko ry'Ubuhinzi</title>
    <link rel="stylesheet" href="serevise.css">
</head>
<body>

    <!-- Logo hejuru ibumoso -->
    <header>
       <a href="aha.php"> <img src="logo.png" alt="Home Logo" id="logo"><a>
        <h1>Isoko ry'Ubuhinzi</h1>
    </header>

    <button id="toggleServices">👨‍🌾 Reba Serivisi</button>

    <!-- Serivisi -->
    <section id="servicesSection">
        <h2>Serivisi Dutanga</h2>
        <p>Turahuza abahinzi n’abaguzi kugira ngo babone isoko ryizewe kandi ryihuse.</p>
        <p>Abahinzi bashobora gushyira umusaruro wabo ku isoko maze abaguzi bakawugura nta nkomyi.</p>
        <p>Dutanga ubufasha bwo kumenyekanisha ibihingwa no kubona amakuru agezweho ku isoko ry’ubuhinzi.</p>
        <p>Tufasha abahinzi kubona amasoko menshi, bityo bakabona inyungu ihamye ku musaruro wabo.</p>
        <p>Abaguzi bashobora kubona ibihingwa bifite ubuziranenge kandi ku giciro kibereye bose.</p>
        <p>Tugira uruhare mu gufasha abahinzi kubona ibikoresho by’ubuhinzi bigezweho kugira ngo bongere umusaruro.</p>
        <p>Tutuma ubuhinzi burushaho gutera imbere binyuze mu guhuza abaguzi n’abahinzi bato n’abakomeye.</p>
        <p>Ushobora kubona amakuru ajyanye n'ibiciro by’isoko rigezweho ndetse n’uburyo bwo gucunga neza umusaruro wawe.</p>
        <p>Serivisi zacu ziri ku murongo kandi zishobora kugerwaho aho uri hose ukoresheje interineti.</p>
        <p>Dufite uburyo bwihariye bwo gufasha abahinzi kubona inguzanyo zo kwagura ubuhinzi bwabo.</p>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var section = document.getElementById("servicesSection");
            section.style.display = "none"; // Guhisha serivisi ubwa mbere

            document.getElementById("toggleServices").addEventListener("click", function() {
                if (section.style.display === "none") {
                    section.style.display = "block"; // Kwerekana serivisi
                } else {
                    section.style.display = "none"; // Guhisha serivisi
                }
            });
        });
    </script>

</body>
</html>
