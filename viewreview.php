<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="viewingreviews.css">
</head>
<body>
    <div id="side-bar">
        <nav class="vmenu navigation">
          <ul>
            <li><a href="loggedinhome.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="services.php">Services</a></li>
          </ul>
        </nav>
        <nav class="vmenu filter">
          <ul>
            <li><a href="aboutus.html">About Us</a></li>
          </ul>
        </nav>
    </div>
      
    <div id="wrapper">
        <div id="header">
          <h1>Reviews</h1>
          <nav class="hmenu">
            <ul>
              <li></li>
              <li></li>
            </ul>
          </nav>
        </div>
        <div id="content">
          <div id="suggestions" class="list-view">
            <ul>
            <?php
                include 'partials/_dbconnect.php';

                // Your PHP code to fetch and display reviews from the database
                $sql = "SELECT * FROM reviews ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li>';
                        echo '<div class="misc">';
                        //echo '<span class="responsible ' . $row['responsible'] . '"></span>';
                        echo '</div>';
                        echo '<div class="details">';
                        echo '<div class="title">';
                        echo '<span class="name">' . $row['username'] . '</span>'. "<br>";
                        //echo '<span class="empid">' . $row['id'] . '</span>'. "<br>";
                        echo '<span class="date">' . $row['created_at'] . '</span>'. "<br>";
                        echo '</div>';
                        echo '<span class="suggestion">' . $row['review'] . '</span>'. "<br>";
                        echo '</div>';
                        echo '</li>';
                        echo "<br><br>";
                    }
                } else {
                    echo "No reviews found.";
                }
            ?>
            </ul>
          </div>
        </div>
      </div>
      <div id="details-view">
        <div class="details-content">
          <article class="suggestion">
            <h3>Gipsz Jakab</h3>
            <span>06-Jun-2016</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>
          </article>
          <article class="review">
          </article>
        </div>
      </div>
</body>
</html>

