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

    // Process form data and insert into the "houses" table
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST['name'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $phone = $_POST['phone'];
    
        // Use a prepared statement
        $query = "INSERT INTO houses (name, location, price, phone) VALUES (?, ?, ?, ?)";
    
        // Prepare the statement
        $stmt = $conn->prepare($query);
    
        // Bind parameters
        $stmt->bind_param("ssds", $name, $location, $price, $phone);
    
        if ($stmt->execute()) {
            echo "<script>
                alert('New house added successfully');
                window.location.href = '/src/listings.php';
            </script>";
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    
        // Close the prepared statement
        $stmt->close();
    }

    // Close the connection
    $conn->close();
?>
