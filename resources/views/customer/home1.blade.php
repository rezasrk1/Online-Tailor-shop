@extends('layouts.customer')

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
div {
  border: 1px null;
  margin-top:0px;
  margin-bottom: 0px;
  margin-right: 150px;
  margin-left: 80px;
  background-color: lightblue;
}
</style>
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
                    <section id="products">
                        <h2>Our Products</h2>
                        <div class="product-container">
                            <div class="product">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTg5xR2AsoRaJ-t1SYMGjZevyXsEzBZfeynA&usqp=CAU" alt="Product 2">
                                <p class="price">$29.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="2">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTutWAWiYx6hyzaHBWJqOZRc317kORHqgRSyQ&usqp=CAU" alt="Product 3">
                                <p class="price">$39.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="3">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=434&q=80" alt="Product 4">
                                <p class="price">$39.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="4">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 5">
                                <p class="price">$19.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="5">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.pexels.com/photos/2850487/pexels-photo-2850487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 6">
                                <p class="price">$29.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="6">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Product 7">
                                <p class="price">$10.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="7">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" alt="Product 8">
                                <p class="price">$15.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="8">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                            <div class="product">
                                <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=415&q=80" alt="Product 9">
                                <p class="price">$10.99</p>
                                <form action="{{ route('carts.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="9">
                                    <button type="submit">Buy</button>
                                </form>
                            </div>
                        </div>
                        <div id="payment-options" style="display: none;">
                            <h3>Select Payment Method</h3>
                            <input type="radio" name="payment_method" value="credit_card"> Credit Card<br>
                            <input type="radio" name="payment_method" value="paypal"> PayPal<br>
                            <input type="radio" name="payment_method" value="stripe"> Stripe<br>
                            <button type="submit">Proceed to Payment</button>
                        </div>
                    </div>
                    <div id="user-info" style="display: none;">
                        <h3>User Information</h3>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div id="payment-options" style="display: none;">
                        <h3>Select Payment Method</h3>
                        <input type="radio" name="payment_method" value="credit_card"> Credit Card<br>
                        <input type="radio" name="payment_method" value="paypal"> PayPal<br>
                        <input type="radio" name="payment_method" value="stripe"> Stripe<br>
                        <button id="proceed-to-payment" type="submit">Proceed to Payment</button>
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
