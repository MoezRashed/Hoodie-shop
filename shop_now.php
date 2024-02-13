<!DOCTYPE html>
<html>
    <head>
        <meta author="m3tez" charset="utf-8">
        <Title>Houdi-ni</Title>
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
        <script defer src="app.js"></script>
        <script>
      
        </script>
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
                    <li><a href="#bestsellers" draggable="false">Best sellers</a></li>
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
        <div class="box">
        <section id='bestsellers' style="background-color: #000;">
        <br>
        <br>
        <br>
        <h3 class="text-center mb-5" style="color: rgb(199,184,94);" style="margin-top: 100px;"><strong>Our Inventory</strong></h3>
            <div class="container py-5 text-center mx-auto row row-cols-1 row-cols-md-3 gp-4">

                <?php
                include "connect.php";
                // Fetch product data from the "products" table
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    
                    // Output data from each row
                    while ($row = $result->fetch_assoc()) {
                        $imagePath = $row['photo_path'];
                        $price = $row['price'];

                        // Check if the image file exists
                        if (file_exists($imagePath)) {
                            echo "<div class='col-lg-4 col-md-12 mb-4'>
                                    <div class='bg-image hover-zoom ripple shadow-1-strong rounded'>
                                        <img src='{$imagePath}' class='w-100' alt='Product Image' />
                                        <a href='Product.php?product_id={$row['id']}'>
                                            <div class='mask' style='background-color: rgba(0, 0, 0, 0);'>
                                                <div class='d-flex justify-content-start align-items-start h-100'>
                                                    <h5><span class='badge bg-light pt-2 ms-3 mt-3 text-dark'>{$price} LE</span></h5>
                                                </div>
                                            </div>
                                            <div class='hover-overlay'>
                                                <div class='mask' style='background-color: rgba(253, 253, 253, 0.15);'></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>";
                        } else {
                            echo "<p>Image not found for product ID {$row['id']}</p>";
                        }
                    }
                } else {
                    echo "No products found.";
                }


       
                $conn->close();
                ?>

            </div>
        </section>
    </div>

</body>