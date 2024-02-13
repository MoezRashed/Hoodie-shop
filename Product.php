<!DOCTYPE html>
<html>
    <head>
        <meta author="m3tez" charset="utf-8">
        <Title>Product | Houdi-ni</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Kdam+Thmor+Pro&family=Marhey:wght@600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="Images/Login-background-tilted.png" type="icon" />
        <link rel="stylesheet" href="css/mdb.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    </head>
    
    <body>
        <header>
            <div class="black-friday">
                HAPPY NEW YEAR | 50% SALE on selected items
            </div>

            <nav class="nav-container">
                <div>
                    <a href="index.php" draggable="false">
                        <img class="logo" src="Images/houdi-ni-duck.png" draggable="false">
                    </a>
                </div>
                <ul class="nav-list">
                    <li style="margin-right: 100px; width: fit-content;">
                        <input type="text" name="search" id="search" placeholder="What are you looking for?" onkeydown="checkEnter(event)">
                    </li>
                    <li><a href="index.php" draggable="false">Best sellers</a></li>
                    <li><a href="#new" draggable="false">New</a></li>
                    <li>|</li>
                    <li><a href="" draggable="false">My Cart</a></li>
                    <?php
                    session_start();
                    // Check if the session variable containing username is set
                    if (isset($_SESSION['ahmedyasser'])) {
                        // Display the username
                        echo '<li>Welcome, ' . htmlspecialchars($_SESSION['ahmedyasser']) . '</li>';
                        echo '<form action="logout.php" method="post">';
                        echo '
                        <li><a href="Login.html" draggable="false"><input type="submit" value="Logout"></a></li>';
                        echo '</form>';
                    } else {
                        // If no session, show the login link
                        echo '<li><a href="Login.html" draggable="false">Login</a></li>';
                    }
                    ?>
                    <!-- <li><a href="Login.html" draggable="false">Login</a></li> -->
                    <!-- <li><a href="#">Sign-Up</a></li> -->
                </ul>
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
                <?php
        // Product.php
        include "connect.php";

      

        // Retrieve the product ID from the query parameter
        if (isset($_GET['product_id'])) {
            $productId = $_GET['product_id'];

            // Fetch product details from the database based on the product ID
            $sql = "SELECT * FROM products WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $productId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Display the product details on the page
                $productName = $row['product_name'];
                $price = $row['price'];
                $imagePath = $row['photo_path'];
                $description = $row['description'];


                // Display the product details in the HTML
                echo "<h3 class='text-center mb-5' style='color: rgb(199,184,94);'><strong>{$productName}</strong></h3>";
                echo "<div class='row'>
                        <div class='col align-self-start text-center'>
                            <img src='{$imagePath}' width='400vw' draggable='false'>
                        </div>
                        <div class='col align-self-top text-center'>
                            <h3 class='text-center mb-5' style='color: rgb(0,0,0); font-weight: bolder;'>{$productName} <span style='color: #8EB4E5;'>HOUDI</span></h3>
                            <p class='mb-5'>{$description}</p>
                            <p><br><strong style='font-size: 32px;'>{$price} LE</strong> </p>
                            <br>
                            <button class='overlay-button' disabled> Checkout</button>
                            <button class='overlay-button2' disabled>Add to cart</button>
                            <button id='redirect' class='overlay-button'>Continue Shopping</button>
                        </div>
                    </div>
                    <script>
          
                    // JavaScript to handle button click and redirection
                    document.getElementById('redirect').addEventListener('click', function() {
                        // Redirect to another page
                        window.location.href = 'shop_now.php';
                    });
                    </script>
                    
                    ";
                    
            } else {
                echo "Product not found.";
            }

            $stmt->close();
        } else {
            echo "Invalid product ID.";
        }

        // Close the database connection
        $conn->close();
        ?>

     </body>
</html>