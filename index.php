<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather App</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="container max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6 text-center">Weather App</h1>
            <form id="weatherForm" class="mb-4">
                <input type="text" id="city" name="city" placeholder="Enter city name" required class="w-full p-3 border border-gray-300 rounded-lg mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200">Get Weather</button>
            </form>
            <div id="weatherResult" class="text-center"></div>
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>