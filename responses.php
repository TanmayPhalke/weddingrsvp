<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP Responses</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        .responses-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }

        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .response-section {
            margin-bottom: 30px;
        }

        .response-section h3 {
            color: #333;
        }

        .response-list {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .response-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="responses-container">
        <h2>RSVP Responses</h2>

        <div class="response-section">
            <h3>People Attending (Yes)</h3>
            <ul class="response-list">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "rsvp";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $yesQuery = "SELECT * FROM responses WHERE attending = 1";
                $yesResult = $conn->query($yesQuery);

                while ($row = $yesResult->fetch_assoc()) {
                    echo "<li>{$row['name']} - {$row['contact_number']}</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>

        <div class="response-section">
            <h3>People Not Attending (No)</h3>
            <ul class="response-list">
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $noQuery = "SELECT * FROM responses WHERE attending = 0";
                $noResult = $conn->query($noQuery);

                while ($row = $noResult->fetch_assoc()) {
                    echo "<li>{$row['name']} - {$row['contact_number']}</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
