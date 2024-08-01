<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen transition-colors duration-300">
        <div class="container max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6 text-center">Weather App</h1>
            <div class="flex justify-center mb-4">
                <div id="themeToggle" class="theme-toggle">
                    <span class="toggle-light">Light</span>
                    <span class="toggle-dark">Dark</span>
                    <div class="toggle-circle"></div>
                </div>
            </div>
            <form id="weatherForm" class="mb-4">
                <input type="text" id="city" name="city" placeholder="Enter city name" required class="w-full p-3 border border-gray-300 rounded-lg mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200">Get Weather</button>
            </form>
            <div id="weatherResult" class="text-center"></div>
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>