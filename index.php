
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
   <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo">Nameera Style</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="collection.php" class="nav-link">Collections</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="ourteam.php" class="nav-link">Our Team</a>
                </li>
            </ul>

             <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Best Dress</h2>
                    <h3 class="subtitle">Make your day great with our special dress!</h3>
                    <p class="description">
                        Koleksi dress dari <strong>Nameera Style</strong> hadir dengan bahan super adem, potongan yang elegan, dan desain simpel yang memikat, sempurna untuk gaya harian yang tetap nyaman dan stylish!
                    </p>


                    <div class="buttons">
                        <a href="#" class="button order">Order Now</a>
                        <a href="#" class="button contact">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="images/logo.jpeg" alt="NameeraStyle" class="nameera-image">
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
    
    <?php include 'footer.php'; ?>
</body>
</html>
