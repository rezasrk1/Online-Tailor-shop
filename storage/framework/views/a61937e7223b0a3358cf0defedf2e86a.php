<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media.istockphoto.com/id/856917576/photo/formal-shirt-with-button-down-collar-isolated-on-white.jpg?s=612x612&w=0&k=20&c=kcZmZdMFb5I2XkhnyAWCFAZgmxuAh0Kk_bFP_w0Ij5A=" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://www.stylecraze.com/wp-content/uploads/2018/01/4.-Anarkali-Suit.jpg" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/564x/92/fd/85/92fd85fd3d5fe3322374914addd225f4.jpg" alt="Slide 3">
            </div>
        </div>
        <style>
        .p3 {
        font-family: "Lucida Handwriting", "Courier New", Cursive;
        }
            div {
            border: 10px null;
            margin-top: 100px;
            margin-bottom: 100px;
            margin-right: 150px;
            margin-left: 80px;
            background-color: light orange;
            }
        </style>
    <style>
        #slideshow {
            display: flex;
            justify-content: center;
            align-items: left;
            height: 400px;
            background-color: #f1f1f2;
        }

        .carousel-inner {
            display: flex;
            justify-content: center;
            align-items: left;
            height: 100%;
        }

        .carousel-item img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }
    </style>


        <!-- Previous and Next buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tailoring System</title>
    <!-- Add your stylesheets and scripts here -->
    <style>
        body {
            height: 125vh;
            margin-top: 80px;
            padding: 30px;
            background-size: cover;
            font-family: sans-serif;
        }

        header {
            background-color: orange;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            height: 50px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
            z-index: 999;
        }

        header * {
            display: inline;
        }

        header ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        header li {
            margin: 0 10px;
            background-color: black;
            padding: 10px;
        }

        header li a {
            color: white;
            text-decoration: none;
        }

        /* Add your custom styles here */
        body {
            background-image: url('https://images.unsplash.com/photo-1594332495179-d979bcd18142?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            max-width: 150px; /* Adjust the width as needed */
            margin-right: auto;
            margin-left: 0;
        }


        header {
            background-color: #f8f8f8; /* Set the background color for the header */
            padding: 20px; /* Add padding as needed */
        }

        .watermarked-logo {
            opacity: 0.5; /* Adjust the opacity for the watermark effect */
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .logo {
            flex: 0 0 auto; /* Prevent the logo from growing or shrinking */
            margin-right: 10px; /* Adjust the margin between the logo and navigation links */
        }

        .nav-links {
            flex: 1; /* Allow the navigation links to grow and fill the remaining space */
            list-style: none;
            display: flex;
            justify-content: space-between;
            padding: 0;
        }

        .nav-links li {
            margin-right: 10px; /* Adjust the margin between the navigation links */
        }

        .nav-links a {
            text-decoration: none;
            color: white; /* Set the color for the navigation links */
            font-weight: white;
        }

        

    </style>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="download.jpg" alt="Logo" class="watermarked-logo">
        </div>
        <ul class="nav-links">
            <li><a href="/home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#tailors">Tailors</a></li>
            <li><a href="#review">Reviews</a></li>
            <li><a href="/login">Log In</a></li>
            
            <li>
                <?php if(Auth::check()): ?>
                    <a href="/home">Welcome, <?php echo e(Auth::user()->name); ?></a>
                <?php else: ?>
                    <a href="/register">Sign Up</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</header>


<!-- Rest of your HTML content -->






    <main>
        <section id="home">
            <!-- Add your home content here -->
            <h1>Welcome to the Online Tailoring System</h1>
            <p>Get your clothes tailored to perfection with our convenient online tailoring services.</p>
        </section>

        <section id="about" style="background-color: #c95d5d; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>About Us</h2>
                        <p class="p3">We are a team of experienced tailors dedicated to providing high-quality tailoring services online. With our easy-to-use platform, you can submit your measurements and preferences, and we will create custom-tailored garments just for you. , shown in the Lucida Console font.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" style="background-color: #8a521a; padding: 50px;">
            <div class="container">
                <h2 class="text-center">Our Services</h2>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <ul class="service-list">
                            <li class="fadein">
                                <h3>Custom Tailoring for Men and Women</h3>
                                <p>We offer custom tailoring services for both men and women, ensuring that your garments are perfectly fitted to your measurements and preferences.</p>
                            </li>
                            <li class="fadein">
                                <h3>Alterations and Repairs</h3>
                                <p>Need alterations or repairs for your clothing? Our skilled tailors are here to help. Whether it's hemming, resizing, or fixing damaged items, we've got you covered.</p>
                            </li>
                            <li class="fadein">
                                <h3>Specialty Services</h3>
                                <p>Looking for specialty services? We specialize in creating bridal wear and formal wear, ensuring that you look stunning on your special occasions.</p>
                            </li>
                            <li class="fadein">
                                <h3>Fast and Reliable Delivery</h3>
                                <p>We understand the importance of timely delivery. Our team ensures fast and reliable delivery of your tailored garments right to your doorstep.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <style>
                .logo-container {
                    max-width: 50px; /* Adjust the width as needed */
                    margin-right: auto;
                    margin-left: 0;
                }

                .fadein {
                    opacity: 0;
                    animation: fadeIn 2s ease-in-out forwards;
                }

                @keyframes fadeIn {
                    0% { opacity: 0; }
                    100% { opacity: 1; }
                }
            </style>
        </section>





        <section id="contact" style="background-color: #e09448; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>Contact Us</h2>
                        <p class="p3">If you have any questions or inquiries, please feel free to reach out to us using the contact information below: , shown in the Lucida Console font.</p>
                        <div class="contact-info">
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:saifulislamreza48@gmail.com">saifulislamreza48@gmail.com</a></p>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:jamila@gmail.com">jamila@gmail.com</a></p>
                            <p><i class="fa fa-phone"></i> Phone: <a href="tel:+880134567890">+88 013-456-7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6WZyz0EKuWJkac04XO88UdC4BjJfka2tBQ&usqp=CAU" alt="Product 1">
                    <p class="price">$19.99</p>
                </div>
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTg5xR2AsoRaJ-t1SYMGjZevyXsEzBZfeynA&usqp=CAU" alt="Product 2">
                    <p class="price">$29.99</p>
                </div>
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTutWAWiYx6hyzaHBWJqOZRc317kORHqgRSyQ&usqp=CAU" alt="Product 3">
                    <p class="price">$39.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=434&q=80" alt="Product 4">
                    <p class="price">$39.99</p>
                </div>
                <div class="product">
                    <img src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 5">
                    <p class="price">$19.99</p>
                </div>
                <div class="product">
                    <img src="https://images.pexels.com/photos/2850487/pexels-photo-2850487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 6">
                    <p class="price">$29.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Product 7">
                    <p class="price">$10.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" alt="Product 8">
                    <p class="price">$15.99</p>
                </div>
                <div class="product">
                    <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=415&q=80" alt="Product 9">
                    <p class="price">$10.99</p>
                </div>

            </div>
        </section>
        <section id="tailors">
            <h1>Meet Our Expert Tailors</h1>
            <p>Experience the craftsmanship of our skilled tailors who create bespoke garments.</p>
            
            <div class="contact-details">
                <h2>Contact Information</h2>
                <p>For inquiries or appointments, please reach out to our tailors:</p>
                
                <ul>
                <li><strong>Name:</strong> Salam Khan</li>
                    <li><strong>Phone:</strong> +88 123-456-7890</li>
                    <li><strong>Email:</strong> tailor@example.com</li>
                    <li><strong>Address:</strong> 123 Tailoring Street, City, Bangladesh</li>
                </ul>
            </div>
        </section>



        <!-- <section id="products">
            <h2>Our Products</h2>
            <div class="product-container">
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-6WZyz0EKuWJkac04XO88UdC4BjJfka2tBQ&usqp=CAU" alt="Product 1">
                    <p class="price">$19.99</p>
                    <form action="<?php echo e(route('carts.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id" value="1">
                        <button type="submit">Buy</button>
                    </form>
                </div>
                <!-- Add more products with buy buttons -->
            <!-- </div>
        </section> --> -->


        <section id="review">
            <h2><li><a href="/reviews">Review</a></li></h2>
            <form action="<?php echo e(route('reviews.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <style>
                /* Customize the form field styles */
                #review input[type="text"],
                #review input[type="email"],
                #review input[type="text"] {
                    border: 2px solid green; /* Set the border color */
                    border-radius: 4px; /* Add border radius for rounded corners */
                    padding: 8px; /* Add some padding for better spacing */
                }
                </style>

                <!-- Add your form fields here (e.g., name, email, password) -->
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="Text" name="Comment" placeholder="Comment" required>
                <button type="/reviews">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Online Tailoring System. All rights reserved.</p>
            <div class="payment-logos">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSK96oAMAhGYhZmy9ig_7Q16HYs13X9-VxnuJCR4-wQtGayFz5FGawU9ganTL_00lTFUSc&usqp=CAU" alt="bKash">
                <img src="https://seeklogo.com/images/D/dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com.png" alt="Rocket">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqD8zddRwkc1_94r-X-GCNgoTRtrtybzCbZ-O7SRd16TmawEWH9Kg7qP5M5Fmk3Xoebww&usqp=CAU" alt="Nagad">
            </div>
        </div>
        <style> 
                .footer-content {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .payment-logos img {
                width: 50px;
                margin: 0 10px;
            }
        <style>

    </footer>


</body>
</html>
<?php /**PATH C:\Xampp\htdocs\online-tailoring-shop\resources\views/welcome.blade.php ENDPATH**/ ?>