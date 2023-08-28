<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .review {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .review strong {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="/home">Home</a>
        <h1>Customer Reviews</h1>
        @if(session('success'))
            <p style="color: #4CAF50;">{{ session('success') }}</p>
        @endif

        <!-- Display existing reviews -->
        @foreach($reviews as $review)
            <div class="review">
                <strong>Name:</strong> {{ $review->name }}<br>
                <strong>Email:</strong> {{ $review->email }}<br>
                <strong>Comment:</strong> {{ $review->comment }}
            </div>
        @endforeach

        <!-- Review Form -->
        <form method="post" action="/submit-review">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>
            <label for="product_picture">Product Picture:</label>
            <input type="file" id="product_picture" name="product_picture">

            <button type="submit">Submit Review</button>
        </form>
        
    </div>
</body>
</html>
