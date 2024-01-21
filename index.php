<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('background_image.jpg') center/cover no-repeat; /* Replace 'your-background-image.jpg' with your actual image */
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 18px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="process.php" method="post">
        <h2>RSVP Form</h2>
        
        <label>Are you attending?</label>
        <input type="radio" name="attending" value="1" required> Yes
        <input type="radio" name="attending" value="0"> No
        
        <label>Your name:</label>
        <input type="text" name="name" required>
        
        <label>Contact number:</label>
        <input type="text" name="contact_number" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
