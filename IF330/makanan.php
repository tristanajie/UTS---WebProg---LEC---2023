<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Scroll Template</title>
    <link rel="stylesheet" href="makanan.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="topnav">
  <a href="menu.php">Back</a>
  <a href="cart.php">Pesanan</a>
</div>
<div class="container">
<form action="addmakanan.php" method="post">
    <select name="selected_menu" class="listmenu" required>
        <option value="Nasi Goreng,20000">Nasi Goreng Rp20.000</option>
        <option value="Mie Goreng,20000">Mie Goreng Rp20.000</option>
        <option value="Burger,25000">Burger Rp25.000</option>
        <option value="Sate Ayam,18000">Sate Ayam Rp18.000</option>
    </select><br />
    <button type="submit" class="add-button">Add</button>
</form>
    <div class="item" data-aos="fade-down">
        <img src="nasgor.jpeg" alt="Nasi Goreng" onclick="showDescription('nasgor-desc')">
        <div class="text">
            <h2>Nasi Goreng</h2>
            <p id="nasgor-desc" class="item-description">Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa, lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-up">
        <img src="miegor.jpeg" alt="Mie Goreng" onclick="showDescription('miegor-desc')">
        <div class="text">
            <h2>Mie Goreng</h2>
            <p id="miegor-desc" class="item-description">Mie goreng berarti "mie yang digoreng" adalah hidangan mie yang dimasak dengan digoreng tumis</p>
        </div>
    </div>

    <div class="item" data-aos="fade-left">
        <img src="burger.jpeg" alt="Burger" onclick="showDescription('burger-desc')">
        <div class="text">
            <h2>Burger</h2>
            <p id="burger-desc" class="item-description">Hamburger atau burger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan bawang bombai. Sebagai sausnya, hamburger diberi berbagai jenis saus seperti mayones, saus tomat dan sambal, serta moster.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-right">
        <img src="sateayam.jpeg" alt="Sate Ayam" onclick="showDescription('sateayam-desc')">
        <div class="text">
            <h2>Sate Ayam</h2>
            <p id="sateayam-desc" class="item-description">Sate ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap.</p>
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