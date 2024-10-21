<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine erste PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Willkommen auf meiner PHP Website!</h1>

    <?php
        echo "<p>Heute ist der " . date("d.m.Y") . ".</p>";
        echo "<p>Es ist " . date("H:i:s") . " Uhr.</p>";
    ?>
</div>

</body>
</html>
