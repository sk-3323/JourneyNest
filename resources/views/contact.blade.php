@include('header')
<!DOCTYPE html>
<html lang="en" style="margin-top: 10vh;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tours and Travels</title>
    <style>
        /* Contact Header */
        .contact-header {
            background-color: #007bff;
            color: white;
            padding: 50px;
            text-align: center;
        }

        .contact-header h1 {
            font-size: 2.5rem;
        }

        .contact-header p {
            font-size: 1.2rem;
        }

        /* Contact Information */
        .contact-info {
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
        }

        .contact-info p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        /* Contact Form */
        .contact-form {
            max-width: 600px;
            margin: 40px auto;
        }

        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Location Map */
        .location-map {
            margin: 40px auto;
            text-align: center;
        }

        .location-map h2 {
            margin-bottom: 20px;
        }

        /* Footer */
        .cta {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>


<body>
    <section class="contact-header">
        <h1>Contact Us</h1>
        <p>We’re here to help you plan your next adventure!</p>
    </section>

    <section class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Address:</strong> Ruderpura, Surat</p>
        <p><strong>Phone:</strong> 8780361401</p>
        <p><strong>Email:</strong> journeynest@travelsite.com</p>
        <p><strong>Working Hours:</strong> Mon - Fri, 9 AM - 6 PM</p>
    </section>

    <section class="contact-form">
        <h2>Send Us a Message</h2>
        <form action="/submit_form" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <section class="location-map">
        <h2>Our Location</h2>
        <iframe src="/images/map.jpg" width="100%" height="400" frameborder="0" style="border:0;"
            allowfullscreen=""></iframe>
    </section>

</body>
@include('footer')

</html>
