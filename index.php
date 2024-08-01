<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather App</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container">
            <h1>Weather App</h1>
            <form id="weatherForm">
                <input type="text" id="city" name="city" placeholder="Enter city name" required>
                <button type="submit">Get Weather</button>
            </form>
            <div id="weatherResult"></div>
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>