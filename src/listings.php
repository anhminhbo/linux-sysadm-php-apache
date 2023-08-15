<?php include 'header.php'; ?>
<html>
    <head>
        <title>PHP Test</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <br>
        <div class="listings">
            <div class="container">
                <button class='dashed-button'>+</button>
            </div>
            <?php
                // Local && Production
                $servername = "mysql";
                $username = "root";
                $password = "admin123";
                $dbname = "estate";
                $port = 3306;

                // Create a connection
                $conn = new mysqli($servername, $username, $password, $dbname, $port);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $query = "SELECT * FROM houses";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='container'>";
                        echo "<img src='/src/img/sample.jpg' alt='House Image' width='250px' class='houseImg'>";
                        echo "<div class='info'>";
                        echo "<div class='name'>" . $row['name'] . "</div>";
                        echo "<div class='price'><b>$</b>" . $row['price'] . "</div>";
                        echo "<div class='location'>" . $row['location'] . "</div>";
                        echo "<div class='phone'>" . $row['phone'] . "</div>";
                        echo "</div></div>";
                    }
                } else {
                    echo "No houses found";
                }

                // Close the connection
                $conn->close();
            ?>
        </div>
        <form action="list.php" method="post" class="list-box-outer" style="visibility: hidden; opacity: 0; transition: all 0.1s ease-in-out 0s; overflow: hidden;">
            <div class="list-box">
                <div class="list-box-header">
                    <h1 class="list-box-title">
                        Listing
                    </h1>
                    <svg class="bi bi-x list-box-close-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </div>
                <div class="input-form">
                    <label for="name">House Name:</label>
                    <input type="text" id="name" name="name" required><br>
                    
                    <label for="price">Price (dollar):</label>
                    <input type="number" id="price" name="price" step="1" required><br>
                    
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location" required><br>

                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" class="phone" required pattern="\d{3}-\d{3}-\d{4}" placeholder="xxx-xxx-xxxx">

                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const toggleButton = document.querySelector('.dashed-button');
                const listBox = document.querySelector('.list-box-outer');
                const closeIcon = document.querySelector('.list-box-close-icon');

                toggleButton.addEventListener('click', function () {
                    listBox.style.visibility = listBox.style.visibility === 'hidden' ? 'visible' : 'hidden';
                    listBox.style.opacity = listBox.style.opacity === '0' ? '1' : '0';
                });

                closeIcon.addEventListener('click', function () {
                    listBox.style.visibility = listBox.style.visibility === 'hidden' ? 'visible' : 'hidden';
                    listBox.style.opacity = listBox.style.opacity === '0' ? '1' : '0';
                });
            });
        </script>
    </body>
    <?php include 'footer.php'; ?>
</html>
