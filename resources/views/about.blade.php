<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tours and Travels</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2 {
            text-align: center;
            color: #333;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('hero-image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-text h1 {
            color: white;
            font-size: 3rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        /* Intro Section */
        .intro,
        .our-story,
        .why-choose-us {
            padding: 50px 20px;
            max-width: 800px;
            margin: auto;
            text-align: center;
        }

        .intro h2,
        .our-story h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #444;
        }

        .intro p,
        .our-story p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Team Section */
        .team {
            background-color: #f9f9f9;
            padding: 50px 20px;
            text-align: center;
        }

        .team-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .team-member h3 {
            margin: 10px 0;
        }

        .team-member p {
            color: #777;
        }

        /* Why Choose Us Section */
        .why-choose-us ul {
            list-style: none;
            padding: 0;
        }

        .why-choose-us li {
            background-color: #e6e6e6;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        /* Footer */
        .cta {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .cta a {
            color: #ffc107;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('header')
    <header class="hero-section">
        <div class="hero-text">
            <h1>Explore the World with Us!</h1>
        </div>
    </header>

    <section class="intro">
        <h2>Who We Are</h2>
        <p>We are a leading tours and travels company offering customized and exciting travel packages to destinations
            around the world.</p>
    </section>

    <section class="our-story">
        <h2>Our Journey</h2>
        <p>Our company was founded with a passion for travel, and over the years, we've expanded our reach to offer
            unforgettable experiences.</p>
    </section>

    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="team1.jpg" alt="Team Member 1">
                <h3>Shubham</h3>
                <p>CEO</p>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <h2>Why Travel with Us?</h2>
        <ul>
            <li>Customized Itineraries</li>
            <li>Expert Travel Guides</li>
            <li>24/7 Customer Support</li>
        </ul>
    </section>

    @include('footer')
</body>

</html>
