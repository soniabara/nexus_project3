<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .feedback-section {
            width: 100%;
            max-width: 600px;
            padding: 60px 20px;
            border-radius: 10px;
            text-align: center;
        }

        .feedback-section h1 {
            font-family: gilroy;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .feedback-section p {
            font-family: gilroy;
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .feedback-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .feedback-form textarea {
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            height: 150px;
            resize: vertical;
        }

        .feedback-btn {
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

        .feedback-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="feedback-section">
        <h1>Feedback</h1>
        <p>We value your feedback.</p>
        <div class="feedback-form">
            <form action="feedback.php" method="post">
                <textarea name="message" placeholder="Type Your Message Here.........." required aria-label="Type Your Message Here"></textarea>
                <button class="feedback-btn" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
