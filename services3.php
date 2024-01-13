<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation Services</title>
    <link rel="stylesheet" href="chat.css">
</head>
<body>
    <header>
        <img src="partials/darklogo.jpg" class="logo">
        <h1 class="Title">Installation Services</h1>
        
    </header>
    <nav>
        <a href="loggedinhome.php">Home</a>
        <a href="services.php">Services</a>
        <a href="services2.php">Repair</a>
        <a href="services3.php">Installation</a>
        <a href="services4.php">Urgent</a>
        <a href="bookinghistory.php"><img src="partials/shopping-cart.png" class="cart"></a>
        <a href="login.php">Login / Signup</a>  
    </nav>
    <div class="container">
        <section class="service" id="installation">
            <h2>Installation </h2>
            <div class="sub-service">
                <img src="partials/DoorBellRepair.jpeg" alt="Door Bell Installation" width="100">
                <div class="sub-service-details">
                    <h3>Door Bell Installation</h3>
                    <p>We install doorbells for enhanced security and convenience.</p>
                    <p><strong>Cost: ₹</strong></p><br>
                    <button>Add to Cart</button>
                    <button type="submit" onclick="location.href='book.php' ">Book Service</button>
                </div>
            </div>
            <div class="sub-service">
                <img src="partials/TVInstallation.webp" alt="TV Installation" width="100">
                <div class="sub-service-details">
                    <h3>TV Installation</h3>
                    <p>We set up your television for an excellent viewing experience.</p>
                    <p><strong>Cost: ₹</strong></p><br>
                    <button>Add to Cart</button>
                    <button type="submit" onclick="location.href='book.php' ">Book Service</button>
                </div>
            </div>
            <div class="sub-service">
                <img src="partials/Fannstallation.png" alt="Fan Installation" width="100">
                <div class="sub-service-details">
                    <h3>Fan Installation</h3>
                    <p>We install ceiling fans to keep your space cool and comfortable.</p>
                    <p><strong>Cost: ₹</strong></p><br>
                    <button>Add to Cart</button>
                    <button type="submit" onclick="location.href='book.php' ">Book Service</button>
                </div>
            </div>
            <!-- Add more installation services here -->
        </section>
        
        
    </div>
    <footer>
        &copy; 2023 Electrician Services
    </footer>
</body>
</html>
