<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minuman</title>
    <link rel="stylesheet" href="minuman.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="topnav">
  <a href="menu.php">Back</a>
  <a href="cart.php">Pesanan</a>
</div>
<div class="container">
<form action="addminuman.php" method="post"> <!-- Ganti action dengan "add.php" -->
<select name="selected_menu" class="listmenu" required> <!-- Perbaiki nama atribut "selected_menu" -->
        <option value="Kopi,15000">Kopi Rp15.000</option>
        <option value="Teh,10000">Teh Rp10.000</option>
        <option value="Air Mineral,5000">Air Mineral Rp5.000</option>
        <option value="Soda,12000">Soda Rp12.000</option>
    </select><br />
    <button type="submit" class="add-button">Add</button>
</form>
    <div class="item" data-aos="fade-left">
        <img src="kopi.jpeg" alt="Kopi" onclick="showDescription('kopi-desc')">
        <div class="text">
            <h2>Kopi</h2>
            <p id="kopi-desc" class="item-description">Kopi adalah tanaman hasil pertanian yang dijadikan minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-right">
        <img src="teh.jpeg" alt="Teh" onclick="showDescription('teh-desc')">
        <div class="text">
            <h2>Teh</h2>
            <p id="teh-desc" class="item-description">Teh adalah minuman yang mengandung kafeina, sebuah infusi yang dibuat dengan cara menyeduh daun, pucuk daun, atau tangkai daun yang dikeringkan dari tanaman Camellia sinensis dengan air panas.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-down">
        <img src="airmineral.jpeg" alt="Air Mineral" onclick="showDescription('airmineral-desc')">
        <div class="text">
            <h2>Air Mineral</h2>
            <p id="airmineral-desc" class="item-description">Air Putih.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-up">
        <img src="soda.jpeg" alt="Soda" onclick="showDescription('soda-desc')">
        <div class="text">
            <h2>Soda</h2>
            <p id="soda-desc" class="item-description">Air soda atau air berkarbonasi adalah air yang dikarbonasikan dan dibuat bersifat effervescent dengan penambahan gas karbon dioksida di bawah tekanan.</p>
        </div>
    </div>
</div>

<script>
    AOS.init(); // Initialize AOS library

    function showDescription(descriptionId) {
        var descriptions = document.querySelectorAll(".item-description");
        descriptions.forEach(function(desc) {
            desc.style.display = "none";
        });

        var description = document.getElementById(descriptionId);
        description.style.display = "block";
    }
</script>
</body>
</html>
