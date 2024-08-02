document.addEventListener('DOMContentLoaded', function(){
    const themeToggle = document.getElementById('themeToggle');
    const html = document.documentElement;
    const savedTheme = localStorage.getItem('theme');
    if(savedTheme){
        if(savedTheme === 'dark'){
            html.classList.add('dark');
        }else{
            html.classList.remove('dark');
        }
    }
    themeToggle.addEventListener('click', function(){
        html.classList.toggle('dark');
        if(html.classList.contains('dark')){
            localStorage.setItem('theme', 'dark');
        }else{
            localStorage.setItem('theme', 'light');
        }
    });
});
document.getElementById('weatherForm').addEventListener('submit', function(e){
    e.preventDefault();
    const city = document.getElementById('city').value;
    const units = document.querySelector('input[name="units"]:checked').value;
    const weatherResult = document.getElementById('weatherResult');
    fetch(`weather.php?city=${city}&units=${units}`)
        .then(response => response.json())
        .then(data =>{
            if(data.error){
                weatherResult.innerHTML = `<p class="text-red-500">${data.error.message}</p>`;
            }else{
                const temp = data.current.temp_c;
                const feelsLike = data.current.feelslike_c;
                const description = data.current.condition.text;
                const icon = data.current.condition.icon;
                const windSpeed = data.current.wind_kph;
                const humidity = data.current.humidity;
                const sunrise = data.forecast.forecastday[0].astro.sunrise;
                const sunset = data.forecast.forecastday[0].astro.sunset;
                weatherResult.innerHTML = `
                    <h2 class="text-2xl font-semibold mb-2">${city}</h2>
                    <p class="text-xl">Temperature: ${temp}°C</p>
                    <p class="text-xl">Feels Like: ${feelsLike}°C</p>
                    <p class="text-lg">Condition: ${description}</p>
                    <p class="text-lg">Wind Speed: ${windSpeed} kph</p>
                    <p class="text-lg">Humidity: ${humidity}%</p>
                    <p class="text-lg">Sunrise: ${sunrise}</p>
                    <p class="text-lg">Sunset: ${sunset}</p>
                    <img class="mx-auto" src="${icon}" alt="${description}">
                `;
                const forecastDays = data.forecast.forecastday;
                forecastDays.forEach(day =>{
                    weatherResult.innerHTML += `
                        <div class="mt-4">
                            <h3 class="text-xl font-semibold">${new Date(day.date).toDateString()}</h3>
                            <p class="text-lg">Max Temp: ${day.day.maxtemp_c}°C</p>
                            <p class="text-lg">Min Temp: ${day.day.mintemp_c}°C</p>
                            <p class="text-lg">Condition: ${day.day.condition.text}</p>
                            <img class="mx-auto" src="${day.day.condition.icon}" alt="${day.day.condition.text}">
                        </div>
                    `;
                });
            }
        })
        .catch(error =>{
            console.error('Error fetching weather data:', error);
            weatherResult.innerHTML = `<p class="text-red-500">Error fetching weather data: ${error.message}</p>`;
        });
});