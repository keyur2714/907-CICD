<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to [Restaurant Name]</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8; /* Light background color */
            color: #333; /* Dark text color for contrast */
        }

        header {
            background-color: #d4af37; /* Example: Golden yellow header */
            color: white;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 2.5em; /* Larger heading */
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            border-radius: 8px; /* Slightly rounded corners */
        }

        .image-section {
            text-align: center; /* Center the image */
            margin-bottom: 20px;
        }

        img {
            max-width: 100%; /* Make image responsive */
            height: auto;
            border-radius: 8px; /* Round image corners too */
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }

        .highlight {
            font-weight: bold;
            color: #d4af37; /* Highlight color */
        }

        .menu-link {
            display: block; /* Make the link a block element */
            text-align: center;
            margin-top: 20px;
        }

        .menu-link a {
            background-color: #d4af37; /* Example: Golden yellow button */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        .menu-link a:hover {
            background-color: #c09525; /* Darker gold on hover */
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed; /* Fixed to the bottom */
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to [Restaurant Name]</h1>
    </header>

    <div class="container">
        <div class="image-section">
            <img src="restaurant_image.jpg" alt="Restaurant Image">  </div>

        <div class="welcome-message">
            <p>Welcome to [Restaurant Name], where we serve delicious [cuisine type] cuisine in a warm and inviting atmosphere.  We are passionate about using fresh, high-quality ingredients to create dishes that you'll love.</p>
            <p>Experience the <span class="highlight">finest [cuisine type]</span> dishes in town! Our menu features a wide variety of options, from classic favorites to innovative new creations.</p>
        </div>

        <div class="menu-link">
            <a href="menu.html">View Our Menu</a>
        </div>
    </div>

    <footer>
        &copy; [Year] [Restaurant Name]. All rights reserved.
    </footer>

</body>
</html>