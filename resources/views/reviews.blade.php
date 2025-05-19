html
<!DOCTYPE html>
<html lang="en">
<a href="/">Home</a>
<head>
    <title>Reviews</title>
    <style>
        body {
            background-color: white;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <h1>Customer Reviews</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
     <!-- Display existing reviews -->
    @foreach($reviews as $review)
        <p>
            <strong>Name:</strong> {{ $review->name }}<br>
            <strong>Email:</strong> {{ $review->email }}<br>
            <strong>Comment:</strong> {{ $review->comment }}
        </p>
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
         <button type="submit">Submit Review</button>
         
    </form>
    <a href="/">Home</a>
</body>
</html>