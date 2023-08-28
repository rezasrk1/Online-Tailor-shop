<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="@if(!empty(AppSettings::get('favicon'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/ico/jami.jpg')}} @endif" type="image/x-icon">
<div id="shopify-section-sections--18064181297466__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><div class="announcement-bar color-inverse gradient" role="region" aria-label="Announcement" ><div class="page-width">
<p class="announcement-bar__message center h5">
    <span>FREE SHIPPING AND COD AVAILABLE</span></p>
</div></div>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }

  .header__heading-logo {
    max-width: 120px;
  }.scrolled-past-header .header__heading-logo {
      width: 75%;
    }@media screen and (min-width: 990px) {
    header-drawer {
      display: none;
    }
  }
  .carousel-item {
    position: relative;
    float: left;
    display: none;
    width: 24%;
    backface-visibility: hidden;
    transition: transform .6s cubic-bezier(0.51, 0.03, 0.24, 1.3);
}
  .menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding-top: 2px;
    padding-bottom: 2px;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 4px;
      padding-bottom: 4px;
    }
  }</style>



<head>
<style>
body.cms-home.cms-index-index .page-main .whats_new .whats_wrap .whats_slider .owl-carousel .item a img {
    max-height: max-content;
}



</style>
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
            <div class="carousel-item" >
                <img src="https://i.pinimg.com/564x/92/fd/85/92fd85fd3d5fe3322374914addd225f4.jpg" alt="Slide 3" style="widyh:50%">
            </div>
        </div>


        








        <style>
        .p3 {
        font-family: "Lucida Handwriting", "Courier New", Cursive;
        }
            div {
                border: 2px #d67f2e;
    margin-top: 0px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 0px;
            }
        </style>
    <style>


        #slideshow {
            margin-top: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: space-around;
    justify-content: center;
    flex-wrap: wrap;
}

        .carousel-inner {
            display: flex;
    align-items: baseline;
    height: 100%;
    flex-direction: row;
    align-content: space-between;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    position: relative;

        }

        .carousel-item>img {
            width: 900px;
    height: 500px;
    object-fit: contain;
    position: relative;
    right: 152px;
            
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
        /* Improve the header and navigation */
header {
    background-color: var(--primary-color);
    padding: 10px 20px; /* Adjust padding for better spacing */
}

.nav-links li {
    margin-right: 15px; /* Adjust the spacing between navigation links */
}

/* Enhance the hero section */
#home {
    background-image: url('your-image-url.jpg'); /* Replace with your image */
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 150px 0;
}

#home h1 {
    font-size: 36px;
    line-height: 1.5;
    margin-bottom: 20px; /* Add some spacing below the title */
}

/* Style product containers */
.product-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(326px, 1fr));
    gap: 109px;
    justify-content: space-evenly;
    align-items: stretch;
    padding: 101px 0;
    align-content: stretch;
    justify-items: stretch;
}

.product {
    text-align: center;
}

.product img {
    max-width: 250px;
    height: 250px;
}

.product-name {
    font-weight: bold;
    font-size: 20px;
    margin-top: 10px;
}

.price {
    font-weight: bold;
    font-size: 18px;
    color: var(--primary-color);
    margin-top: 5px;
}

/* Adjust contact information styles */
.contact-details ul {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
li{
    list-style: none;
}
.contact-details li {
    margin-bottom: 10px;
}

/* Refine footer styling */
footer {
    background-color: var(--background-color);
    padding: 20px 0;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.payment-logos img {
    width: 40px;
    margin: 0 10px;
}

/* Add hover effect to products */
.product:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}





        :root {
            --primary-color: #FFA500; /* Orange */
            --secondary-color: #008CBA; /* Blue */
            --background-color: #F8F8F8; /* Light gray */
        }

        body {
            background-color: var(--background-color);
        }

        body {
            font-family: Arial, sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Helvetica Neue', sans-serif;
        }


        /* body {
            height: 125vh;
            margin-top: 80px;
            padding: 30px;
            background-size: cover;
            font-family: sans-serif;
        } */

        header {
            background-color: orange;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    height: 98px;
    display: flex;
    align-items: stretch;
    box-shadow: 0 0 25px 0 black;
    z-index: 999;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;
    align-content: space-around;
        }

        /* header {
            background-color: var(--primary-color);
            color: white;
        } */

        /* .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        } */

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
            border-radius: 12px;
            padding: 8px 20px;
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
        @media (min-width: 992px)
.offset-lg-2 {
    margin-left: 0%; 
}
        

    </style>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo" style="position: relative;right: 14%;">
        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/logo/jamis1.jpg')}} @endif">
        </div>
        <ul class="nav-links">
            <li><a href="/customer-login">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#tailors">Tailors</a></li>
            <li><a href="#review">Reviews</a></li>
            <li><a href="/login">Log In</a></li>
            <li><a href="http://127.0.0.1:8000/customer/login">Customer</a></li>
            
            <li>
                @if(Auth::check())
                    <a href="/home">Welcome, {{ Auth::user()->name }}</a>
                @else
                    <a href="/customer-registration">Sign Up</a>
                @endif
            </li>
        </ul>
    </div>
</header>


<!-- Rest of your HTML content -->






    <main>
        <section id="home">
            <!-- Add your home content here -->
            <h1>Welcome to the Jami's Tailoring Shop</h1>
            <head>
            <title>Welcome to the Online Tailoring System!</title>
            <link rel="stylesheet" href="styles.css" />
            </head>
            <body>
                <h1 class="title"></h1>
                <p id="currentTime"></p>
                <script src="script.js"></script>
            </body>
            <p>Get your clothes tailored to perfection with our convenient online tailoring services.</p>
        </section>

        <!-- <section id="about" style="background-color: #ededa8; padding: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
            
                </div>
            </div>
        </div> -->
        </section>
        <section id="about" style="background-color: #ededa8; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  text-center">
                        <h2 style="font-size: 28px; font-weight: bold;">About Us</h2>
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/s2.jpg')}} @endif">
                        <p style="font-size: 20px;">
                            Welcome to Jami's online tailoring shop, where elegance meets precision. We are a dedicated team of skilled tailors with years of experience in the art of creating bespoke garments. We provide you with high-quality tailoring services, right at your fingertips. With the convenience of our online platform. From formal attire to casual wear, we offer a wide range of custom-tailored clothing options to suit your individual preferences. Our commitment to craftsmanship and attention to detail ensure that every garment we create is a masterpiece. Your satisfaction is our top priority. Our user-friendly interface makes it easy for you to submit your measurements, choose fabrics, and customize styles according to your taste. Our team is here to transform your vision into reality.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="about" style="background-color: #ededa8; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <h2>About Us</h2>
                        <p class="p3">We are a team of experienced tailors dedicated to providing high-quality tailoring services online. With our easy-to-use platform, you can submit your measurements and preferences, and we will create custom-tailored garments just for you. , shown in the Lucida Console font.</p>
                    </div>
                </div>
            </div>
        </section> -->

        


        <section id="services" style="background-color: #e1f0e8; padding: 50px;">
            <div class="container">
                <!-- <h2 class="text-center">Our Services</h2> -->
                <div class="row justify-content-center">
                    <img class="img-center" id="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/rs.jpg')}} @endif" style="width: 500px;">
                </div>
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





        <section id="contact" style="background-color: #8ce2fa; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <h2 style="font-size: 28px; font-weight: bold;">Contact Us</h2>
                        <!-- <h2>Contact Us</h2> -->
                        
                        <p style="font-size: 20px;">If you have any questions or inquiries, please feel free to reach out to us using the contact information below: .</p>
                        <div class="contact-info">
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:saifulislamreza48@gmail.com">saifulislamreza48@gmail.com</a></p>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:jamila@gmail.com">jamila@gmail.com</a></p>
                            <p><i class="fa fa-phone"></i> Phone: <a href="tel:+880134567890">+88 013-456-7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <<section id="products" style="background-color: #e8d754; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  text-center">
                        <h2 class="text-center">Our Products</h2>
                        <div class="product-container">
                            <div class="product">
                                <img class="brand-logo" alt="logo" src="
                                @if(!empty(AppSettings::get('logo')))
                                    {{ asset('storage/' . AppSettings::get('logo')) }}
                                @else
                                    {{ asset('app-assets/images/resize photo/p1.jpg') }}
                                @endif">
                                <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Blouse</p>
                                <p class="price" style="font-weight:bold; font-size: 18px;">Price: $17</p>
                                <button class="add-to-cart-btn btn btn-primary" style="display: inline-block; margin-left: 10px;">Add to Cart</button>
                                
                            

                            
                          
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p2.1.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Blause</p>
                        
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$29.99</p><button class="add-to-cart-btn btn btn-primary" style="display: inline-block; margin-left: 10px;">Add to Cart</button>
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p6.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Kamij</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$30</p>
                        
                           
                           
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p7.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">shelower kamij</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$42</p>    
                         
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p8.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">kurti</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$22</p>    
                            
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p9.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Kurti</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$22</p>   
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p5.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Baby kamij</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$18</p>  
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p10.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Baby frok</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$26</p>  
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p11.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Baby frok</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$26</p>    
                            
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p13.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">panjabi</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$30</p>  
                        </div>

                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p14.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">shirt</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$22.50</p>
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p21.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">coat</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$40</p>  
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p22.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">safari suite</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$60</p>   
                        </div>

                        <script>
                            function addToCart() {
                                // Check if the user is logged in (You'll need to implement this logic)
                                var isLoggedIn = checkUserLoginStatus(); // Replace with your actual logic

                                if (!isLoggedIn) {
                                    // Redirect the user to the customer login page
                                    window.location.href = '/customer-login'; // Replace with your customer login page URL
                                } else {
                                    // Perform the logic to add the product to the cart
                                    // You can use AJAX or any other method here
                                    // For example: send an API request to add the product to the cart
                                }
                            }
                        </script>
                        
                        

                    </div>
        </section>
        <section id="tailors" style="text-align: center; margin: 20px;padding: 100px 50px;">
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
            <div class="contact-image" style="
    text-align: center;
    padding: 100px;
">
         <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/t1.jpg')}} @endif">
    </div>


    <ul>
                <li><strong>Name:</strong> Rubi Rahman </li>
                    <li><strong>Phone:</strong> +008 01811769099</li>
                    <li><strong>Email:</strong> ladistailor@example.com</li>
                    <li><strong>Address:</strong> 123 Tailoring Street, City, Bangladesh</li>
                </ul>
            </div>
            <div class="contact-image" style="
    padding: 50px;
    text-align: center;
    margin: 30px;
">
         <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/t2.jpg')}} @endif">
    </div>
        
        </section>

        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailor Review</title>
    <script>
        function submitReview() {
            var rating = document.querySelector('input[name="rating"]:checked').value;
            var reviewText = document.getElementById('reviewText').value;
            
            // Send the review data to the server using AJAX or fetch
            // Here, you can use XMLHttpRequest, fetch API, or a JavaScript framework like Axios
            // Replace the following lines with your actual API endpoint and data format
            var data = {
                rating: rating,
                reviewText: reviewText
            };
            
            fetch('/submit-review', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                // Handle the response from the server
                console.log(result);
                // Update UI to show success message or refresh reviews
            })
            .catch(error => {
                console.error('Error:', error);
                // Update UI to show error message
            });
        }
    </script>
</head>
<body>
    <h1 style="text-align:center;">Leave a Review</h1>
    <form style="
    text-align: center;
    padding: 56px;
    display: grid;
    align-content: center;
    justify-content: center;
    align-items: stretch;
    justify-items: center;
    gap: 50px;">
        <div>
            <label for="rating">Rating:</label>
            <input type="radio" name="rating" value="5" checked> 5
            <input type="radio" name="rating" value="4"> 4
            <input type="radio" name="rating" value="3"> 3
            <input type="radio" name="rating" value="2"> 2
            <input type="radio" name="rating" value="1"> 1
        </div>
        <div style="
    text-align: center;
    font-weight: bold;
    display: flex;
    flex-direction: column;
    gap: 23px;
">
            <label for="reviewText">Review:</label>
            <textarea id="reviewText" rows="4" cols="50"></textarea>
        </div>
        <button type="button" onclick="submitReview()">Submit Review</button>
    </form>
</body>





        <section id="review" style="
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    align-items: stretch;flex-direction: column;justify-content: flex-end;padding: 52px;">
            <h2><li><a href="/reviews">Review</a></li></h2>
            <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
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
                <button type="submit">Submit Review</button>
                <!-- <button type="/reviews">Submit</button> -->
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
