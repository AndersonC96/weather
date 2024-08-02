<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 dark:text-gray-100 flex items-center justify-center h-screen transition-colors duration-300">
        <div class="container max-w-md mx-auto bg-white dark:bg-gray-800 dark:text-gray-200 p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6 text-center">Weather App</h1>
            <div class="flex justify-center mb-4">
                <div id="themeToggle" class="theme-toggle relative w-20 h-10 rounded-full transition-colors duration-300 bg-gray-300 dark:bg-gray-700 cursor-pointer">
                    <div class="absolute w-8 h-8 bg-white dark:bg-gray-800 rounded-full transition-transform transform dark:translate-x-10 m-1"></div>
                    <span class="absolute left-2 top-1/2 transform -translate-y-1/2 text-sm font-bold text-gray-900 dark:text-gray-400">☀️</span>
                    <span class="absolute right-2 top-1/2 transform -translate-y-1/2 text-sm font-bold text-gray-400 dark:text-gray-100">🌙</span>
                </div>
            </div>
            <form id="weatherForm" class="mb-4">
                <input type="text" id="city" name="city" placeholder="Enter city name" required class="w-full p-3 border border-gray-300 rounded-lg mb-4 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                <div class="flex justify-between mb-4">
                    <label class="flex items-center">
                        <input type="radio" name="units" value="metric" checked class="mr-2"> Celsius
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="units" value="imperial" class="mr-2"> Fahrenheit
                    </label>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200">Get Weather</button>
            </form>
            <div id="weatherResult" class="text-center"></div>
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>