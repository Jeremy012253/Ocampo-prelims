<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beer Website</title>
    <style>
        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        .featured-beer {
            text-align: center;
            margin-bottom: 30px;
        }

        .featured-beer img {
            width: 200px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .featured-beer h2 {
            margin-top: 10px;
        }

        .beer-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .beer {
            width: 250px;
            background-color: #fff;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .beer img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .beer h3 {
            margin-bottom: 10px;
        }

        .beer p {
            margin-bottom: 15px;
        }

        .beer a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .beer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Beer Website</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Beers</a></li>
            <li><a href="#">Breweries</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="featured-beer">
        <h2>Featured Beer</h2>
        <img src="beer.jpg" alt="Featured Beer">
        <h3>Beer Name</h3>
        <p>Description of the featured beer goes here.</p>
        <a href="#">Learn More</a>
    </section>

    <section class="beer-list">
        <div class="beer">
            <img src="beer1.jpg" alt="Beer 1">
            <h3>Beer 1</h3>
            <p>Description of beer 1.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="beer">
            <img src="beer2.jpg" alt="Beer 2">
            <h3>Beer 2</h3>
            <p>Description of beer 2.</p>
            <a href="#">Learn More</a>
        </div>
        <div class="beer">
            <img src="beer3.jpg" alt="Beer 3">
            <h3>Beer 3</h3>
            <p>Description of beer 3.</p>
            <a href="#">Learn More</a>
        </div>
        <!-- Add more beer items as needed -->
    </section>
</main>

</body>
</html>
