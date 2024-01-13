<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urgent Services</title>
    <link rel="stylesheet" href="chat.css">
    
</head>
<body>
    <header>
        <img src="partials/darklogo.jpg" class="logo">
        <h1 class="Title">Urgent Services</h1>
    </header>
    <nav>
        <a href="loggedinhome.php">Home</a>
        <a href="services.php">Services</a>
        <a href="services2.php">Repair</a>
        <a href="services3.php">Installation</a>
        <a href="services4.php">Urgent</a>
        <a href="bookinghistory.php"><img src="partials/shopping-cart.png" class="cart"></a>
        <!-- <a href="#">Cart</a>   -->
        <!-- <img src="shopping-cart.png" class="cart"> -->
        <a href="login.php">Login / Signup</a>    

    </nav>
    <div class="container">
        
        <section class="service" id="urgent">
              <div class="sub-service">
                <img src="partials/Inspection copy.png" alt="Inspection" width="100">
                <div class="sub-service-details">                   <h3>Inspection</h3>
                    <p>We provide urgent electrical inspections to ensure safety.</p>
                    <p><strong>Cost: ₹</strong></p><br>
                    <button>Add to Cart</button>
                    <button type="submit" onclick="location.href='book.php' ">Book Service</button>
                </div>
            </div>
            <div class="sub-service">
                <img src="partials/Wiring.jpeg" alt="Wiring" width="100">
                <div class="sub-service-details">                   <h3>Wiring</h3>
                    <p>We provide urgent electrical inspections to ensure safety.</p>
                    <p><strong>Cost: ₹</strong></p><br>
                    <button>Add to Cart</button>
                    <button type="submit" onclick="location.href='book.php' ">Book Service</button>
                </div>
            </div>
            <!-- Add more urgent services here -->
        </section>
        
    </div>
    <footer>
        &copy; 2023 Electrician Services
    </footer>
</body>
</html>
