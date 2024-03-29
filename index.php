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
        
    </head>

    <body>
        <header>
            <div class="black-friday">
                HAPPY NEW YEAR | 50% SALE on selected items
            </div>

            <nav class="nav-container">

                <div>
                    <a href="#" draggable="false">
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

                    if (isset($_SESSION['ahmedyasser'])) 
                    {
                      $username = $_SESSION['ahmedyasser'];
                      setcookie("user", $username, time() + 60, "/");
                        echo '<li>Welcome, ' . htmlspecialchars($_SESSION['ahmedyasser']) . '</li>';
                        echo '<form action="logout.php" method="post">';
                        echo '
                        <li><a href="Login.html" draggable="false"><input type="submit" value="Logout"></a></li>';
                        echo '</form>';
                    } 
                    else 
                    {
                        // If no session, show the login link
                        echo '<li><a href="Login.html" draggable="false">Login</a></li>';
                    }
                    ?>
                </ul>

            </nav>
        </header>


        <!-- louie duck section  -->
        <div class="box">
          <section class="duck-duck-goose">

            <div class="text col-lg-4 col-md-12 mb-4">
                "Even a duck looks cool in <span class="brand">HOUDI-NI</span>"
                <br>
                -Louie Duck or Houdini
                <br>
                <br>
                Just click the button.
                <br>
                <br>
                <button id="redirect" class="overlay-button">SHOP NOW</button>
                <script>
          
                // JavaScript to handle button click and redirection
                document.getElementById("redirect").addEventListener("click", function() {
                    // Redirect to another page
                    window.location.href = "shop_now.php";
                });
                </script>
            </div>

            <!-- class="overlay-text" -->
            <img class="col-lg-4 col-md-12 mb-4" src="Images/Duck.gif" loop="false" draggable="false" loop="false">
        </div>
        </section>
        <!-- shop our best sellers -->
        <div class="box">
          <section id='bestsellers' style="background-color: #000;">
            <!-- <div class="container py-5">
              
          
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <img src="Images/2e6a183741b6811ae5b3ed82d519290b.webp"
                      class="w-100" />
                    <a href="Product.php">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">999LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
          
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <img src="Images/TheConquererhoodief_b.webp"
                      class="w-100" />
                    <a href="Product.php">                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">1299LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
          
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <img src="Images/5202045530850.webp"
                      class="w-100" />
                    <a href="Product.php">                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">999LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
          
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
                    <img src="Images/a72f9ffc8efcefc937d3fceb717e65d0.webp"
                      class="w-100" />
                    <a href="Product.php">
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">1099LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
          
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <img src="Images/37b184b7c87f41a225a7bde27ca44dbd.webp"
                      class="w-100" />
                    <a href="Product.php">                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">899LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                    <img src="Images/6041d7d8ea5505b98fbbc329661ed302.webp"
                      class="w-100" />
                    <a href="Product.php"></a>
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
                        <div class="d-flex justify-content-start align-items-start h-100">
                          <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">1099LE</span></h5>
                        </div>
                      </div>
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
            <br>
            <br>
            <h3 class="text-center mb-5" style=" color: rgb(199,184,94);"><strong>Best sellers</strong></h3>
            <div class="container py-5 text-center mx-auto row row-cols-1 row-cols-md-3 gp-4">

    <?php
    include "connect.php";
    // Fetch the three products with the lowest quantity from the "products" table
    $sql = "SELECT * FROM products ORDER BY quantity ASC LIMIT 3";
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
        <!-- AI  -->
        <div class="box">
          <section id="new" class="Ai">
            <div class="container py-5 mb-4">
                <h3 class="text-center mb-5" style=" color: rgb(199,184,94);"><strong>New</strong></h3>
                  <div class="row">
                    <div class="col align-self-start text-center">
                        <img src="Images/embracethechaos.webp" width="400vw" draggable="false" >
                    </div>
                    <div class="col align-self-center text-center">
                      <h3 class="text-center mb-5" style=" color: rgb(0,0,0); font-weight: bolder;">You can design your own <span style="color: #8EB4E5;">HOUDI-NI</span></h3>
                        <p>with the help of AI and other concepts that you will never understand. <br> Just type the topic and these concepts will backfire with designs! </p>
                        <br>
                        <button class="overlay-button" disabled>COMING SOON</button>
                    </div>
                  </div>
            </div>
        </section>
        </div>
        <!-- footer section -->
        <section>
            <!-- Footer -->
            <footer class="text-center footer">
                <!-- Grid container -->
                <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    draggable="false"><i class="fab fa-facebook-f"></i
                    ></a>
            
                    <!-- Twitter -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    draggable="false"><i class="fab fa-twitter"></i
                    ></a>
            
                    <!-- Google -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="mailto:moezalaa@gmail.com" role="button"
                    draggable="false"><i class="fab fa-google"></i
                    ></a>
            
                    <!-- Instagram -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
                    draggable="false"><i class="fab fa-instagram"></i
                    ></a>
            
                    <!-- Linkedin -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="https://www.linkedin.com/in/moezrashed/" role="button"
                    draggable="false" target="_blank"><i class="fab fa-linkedin-in"></i
                    ></a>
            
                    <!-- Github -->
                    <a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/MoezRashed" role="button"
                    draggable="false" target="_blank"><i class="fab fa-github"></i
                    ></a>
                </section>
                <!-- Section: Social media -->
            
                <!-- Section: Form -->
                <section class="">
                    <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                        </div>
                        <div class="col-md-5 col-12">
                        <div>
                            <input type="email" id="form5Example21" class="form-control" placeholder="Email Address"/>
                        </div>
                        </div>
                        <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-dark mb-4">
                            Subscribe
                        </button>
                        </div>
                    </div>
                    </form>
                </section>
                <!-- Section: Form -->
            
                <!-- Section: Text -->
                <section class="mb-4">
                  <p>
                    <?php
                   
                          // Check if the "user" cookie is set
                          if (isset($_COOKIE["user"])) {
                              // Retrieve and display the value of the "user" cookie
                              $username = $_COOKIE["user"];
                              echo "Welcome back, $username!";
                          } else {
                              echo "Welcome, guest!";
                          }
                      ?>
                  </p>
                    <p>
                    Donate. Donate. Donate. Donate. 
                    <br>
                    <a href="https://www.paypal.com/paypalme/vincentvangoatt" target="_blank">Click </a>
                    </p>
                </section>
                </div>

            
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0); color: white;">
                    &copy; 2023, HOUDI-NI. <br> All rights reserved.
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </section>
    </body>
</html>