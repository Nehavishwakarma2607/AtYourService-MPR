<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include 'partials/_dbconnect.php';

    $servicetype = $_POST['servicetype'];
    $date = $_POST["date"];
    $time = $_POST['time'];
    $address = $_POST['address'];
    $info = $_POST['info'];

    // Generate OTP
    $otp = rand(1000, 9999);

    // Generate Service Provider ID and Name
    $serviceProviders = array(
        array('id' => 'AYS001', 'name' => 'Nilesh Rao'),
        array('id' => 'AYS002', 'name' => 'John Smith'),
        array('id' => 'AYS003', 'name' => 'Aleena Sharma'),
        array('id' => 'AYS004', 'name' => 'Olivia Fernandes'),
        array('id' => 'AYS005', 'name' => 'Namo Pandey'),
        array('id' => 'AYS006', 'name' => 'Sanjay Verma'),
        array('id' => 'AYS007', 'name' => 'Priya Khanna'),
        array('id' => 'AYS008', 'name' => 'Arun Chaudhary'),
        array('id' => 'AYS009', 'name' => 'William James'),
        array('id' => 'AYS010', 'name' => 'Lakshita Deshmukh')
        // Add more providers as needed
    );

    $popup_otp = $_POST['popup-otp'];
    $popup_service_provider_id = $_POST['popup-service-provider-id'];
    $popup_service_provider_name = $_POST['popup-service-provider-name'];

    // Insert the data into the database (add your database connection code)
    $sql = "INSERT INTO `bookings` (`servicetype`, `date`, `time`, `address`, `info`, `otp`, `service_provider_id`, `service_provider_name`) VALUES ('$servicetype', '$date', '$time', '$address', '$info', '$popup_otp', '$popup_service_provider_id', '$popup_service_provider_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Your service has been successfully booked! Here are the details of your booking: <br>";
    } else {
        echo "Error: Oopsie.. Booking not confirmed! Try again!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Service Booking</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>
    <header>
        <h1>At Your Service</h1>
        <hr>
    </header>
    <hr>
    <main>
        <section id="booking-form">
            <h2>Make Your Booking</h2>
            <form method="post" action="book.php">
                <div class="form-group">
                    <label for="servicetype">Service Type: *</label>
                    <select id="servicetype" name="servicetype">
                        <option value="Geyser Repair">Geyser Repair</option>
                        <option value="Refrigerator Repair">Refrigerator Repair</option>
                        <option value="Doorbell Repair">Doorbell Repair</option>
                        <option value="Microwave Repair">Microwave Repair</option>
                        <option value="House Cleaning">Washing Machine Repair</option>
                        <option value="Doorbell Installation">Doorbell Installation</option>
                        <option value="Fan Installation">Fan Installation</option>
                        <option value="TV Installation">TV Installation</option>
                        <option value="Electrical Inspection">Electrical Inspection</option>
                        <option value="Wiring">Wiring</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date: *</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time: *</label>
                    <input type="time" id="time" name="time">
                </div>
                <div class="form-group">
                    <label for="address">Address: *</label>
                    <textarea id="address" rows="4" placeholder="Enter your full address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="info">Additional details/ requirements:</label>
                    <textarea id="info" rows="4" name="info"></textarea>
                </div>
                <button type="button" onclick="showConfirmationPopup()">Confirm Booking</button>

                <div class="overlay" id="overlay" hidden>
                    <div class="confirm-box">

                        <div id="confirmation-info" style="display: none;">
                            <p>OTP: <span id="otp"></span></p>
                            <p>Service Provider ID: <span id="service-provider-id"></span></p>
                            <p>Service Provider Name: <span id="service-provider-name"></span></p>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="popup-otp" name="popup-otp">
                <input type="hidden" id="popup-service-provider-id" name="popup-service-provider-id">
                <input type="hidden" id="popup-service-provider-name" name="popup-service-provider-name">

            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Local Service Booking</p>
    </footer>

    <script>
        function showConfirmationPopup() {
    // Generate the OTP (a 4-digit random number)
    var otp = Math.floor(1000 + Math.random() * 9000);

    // Generate a random service provider
    var serviceProviders = [
        { id: 'AYS001', name:  'Nilesh Rao'},
        { id:  'AYS002', name:  'John Smith'},
        { id:  'AYS003', name:  'Aleena Sharma'},
        { id:  'AYS004', name:  'Olivia Fernandes'},
        { id:  'AYS005', name:  'Namo Pandey'},
        { id:  'AYS006', name:  'Sanjay Verma'},
        { id:  'AYS007', name:  'Priya Khanna'},
        { id:  'AYS008', name:  'Arun Chaudhary'},
        { id:  'AYS009', name:  'William James'},
        { id:  'AYS010', name:  'Lakshita Deshmukh'}
    ];
    var randomProvider = serviceProviders[Math.floor(Math.random() * serviceProviders.length)];
    
    // Display the information in the popup
    document.getElementById("otp").innerText = otp;
    document.getElementById("service-provider-id").innerText = randomProvider.id;
    document.getElementById("service-provider-name").innerText = randomProvider.name;

    // Show the popup
    document.getElementById("confirmation-info").style.display = "block";
    document.getElementById("overlay").hidden = false;
}

</script>

</body>
</html>
