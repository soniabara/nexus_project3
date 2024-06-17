<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* background: url("images/gradientdown.jpg") no-repeat center center/cover; */
            background-color: black;
            color: #ffffff; /* Ensure text is visible on background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contact-section {
            width: 100%;
            max-width: 600px;
            padding: 60px 20px;
          
            border-radius: 10px;
            text-align: center;
        }

        .contact-section h1 {
            font-family: gilroy;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-family: gilroy;
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        .contact-btn {
            padding: 15px 30px;
            margin-top: 20px;
            background-color: rgb(153 54 153);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="contact-section">
        <h1>CONTACT  US</h1>
        <p>Get in touch with us.</p>
        <div class="contact-form">
            <form action="userinfo.php" method="post">
                <input type="text" name="user" placeholder="Your Full Name" required aria-label="Your Full Name"/>
                <input type="email" name="email" placeholder="Your E-Mail" required aria-label="Your E-Mail"/>
                <textarea name="message" placeholder="Type Your Message Here.........." required aria-label="Type Your Message Here"></textarea>
                <button class="contact-btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
