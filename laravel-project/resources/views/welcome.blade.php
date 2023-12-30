<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-pzKdXX/fV5/Q9H6EGCQQ5Z73I7VaTDXqfMToR5B1z5C4qaivLzvExZS1lnaAm6c9IbSkGjMO6FDi7sBLgUf5KKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
        }

        .emoji {
            font-size: 4em; /* Adjust the size of the emoji as needed */
            color: #3498db; /* Change the color as needed */
        }

        .title {
            font-size: 24px;
            margin-top: 20px;
            color: #333; /* Change the color as needed */
        }

        .button {
            padding: 15px 30px;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db; /* Change the background color as needed */
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .button:hover {
            background-color: #2980b9; /* Change the hover color as needed */
        }
    </style>
    <title>My Index Page</title>
</head>
<body>

<div class="container">
    <i class="fas fa-smile emoji"></i> <!-- Replace with the desired Font Awesome class for your emoji -->
    <div class="title">Welcome to My Website!</div>
    <a href="/register" class="button">Registration</a>
</div>

</body>
</html>
