<?php include 'src/header.php'; ?>
<html>
    <head>
        <title>PHP Test</title>
        <link rel="stylesheet" type="text/css" href="/src/css/style.css">
    </head>
    <?php include 'src/hero.php'; ?>
    <body>
        <?php
        // Local && Production
        $servername = "mysql";
        $username = "root";
        $password = "admin123";
        $dbname = "mysql";
        $port = 3306;

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Connection successful, display success message
        echo "<h1>MySQL Connection Successful tes!</h1>";

        // Close the connection
        $conn->close();
        ?>
        
        <div class="reason">
            <h1>Looking for Real Estate Agent?</h1>
            <p>Cindy Lin Real Estate Team gets most of the business from REFERRALs.  Why? Because we provide the most trustworthy service to our clients, and our clients love us.  Email or call us today to find out more details. We offer free Buyer's Consultation and Listing Presentation to walk you through the home purchasing/listing process.</p>
        </div>
        <div class="profile">
            <div class="profile-list">
                <h1>Why Jia Lissa Real Estate Team?</h1>
                <ul>
                    <li>High quality service and fast response</li>
                    <li>Honesty and Integrity</li>
                    <li>Excellent negotiation skills</li>
                    <li>Using Hi-Tech to help you find houses quickly</li>
                    <li>Speaks Russian, Georgian and Ukrainian</li>
                </ul>
            </div>
            <div class="profile-picture">
                <img src="src/img/jia.jpg" height="300px"/>
            </div>
        </div>
    </body>
<?php include 'src/footer.php'; ?>
</html>
