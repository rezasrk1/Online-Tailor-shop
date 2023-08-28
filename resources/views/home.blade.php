@extends('layouts.app')

@section('content')
<link rel="shortcut icon" href="@if(!empty(AppSettings::get('favicon'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/ico/jami.jpg')}} @endif" type="image/x-icon">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Congratulations! You are logged in!') }}
                </div>
                <section id="products" style="background-color: #e8d754; padding: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="text-center">Our Products</h2>
                    <div class="product-container">
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p1.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Blause</p>
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$17</p>
                            
                          
                        </div>
                        <div class="product">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/resize photo/p2.1.jpg')}} @endif">
                        <p class="product-name" style="font-weight:bold; font-size: 24px; font-style: italic;">Blause</p>
                        
                        <p class="price" style="font-weight:bold; font-size: 18px;">price:$29.99</p>
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
                        
                        

                    </div>
        </section>

                    <script>
                        // Show user information after clicking the "Buy" button
                        const buyButtons = document.querySelectorAll('.buy-button');
                        const userInfoForm = document.getElementById('user-info');
                        const paymentOptions = document.getElementById('payment-options');

                        buyButtons.forEach((button) => {
                            button.addEventListener('click', (event) => {
                                event.preventDefault();
                                const productID = button.dataset.product;
                                console.log('Product ID:', productID);

                                // Display user information form
                                userInfoForm.style.display = 'block';
                                paymentOptions.style.display = 'block';
                            });
                        });

                        // Proceed to payment and save data to the database
                        const paymentButton = document.getElementById('proceed-to-payment');
                        paymentButton.addEventListener('click', (event) => {
                            event.preventDefault();

                            const productID = paymentButton.dataset.product;
                            const name = document.getElementById('name').value;
                            const email = document.getElementById('email').value;

                            // Send data to the server using AJAX
                            const xhr = new XMLHttpRequest();
                            const url = '/save-payment';
                            const data = JSON.stringify({ productID, name, email });

                            xhr.open('POST', url, true);
                            xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

                            xhr.onreadystatechange = function () {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    // Handle the response from the server (if needed)
                                    console.log(xhr.responseText);
                                }
                            };

                            xhr.send(data);
                        });
                    </script>



            </div>
        </div>
    </div>
</div>
@endsection
