document.addEventListener('DOMContentLoaded', function(){
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const container = document.querySelector('.container');
    const savedTheme = localStorage.getItem('theme');
    if(savedTheme){
        if(savedTheme === 'dark'){
            body.classList.add('bg-gray-900');
            body.classList.add('text-gray-200');
            container.classList.add('bg-gray-800');
            container.classList.add('text-gray-200');
        }else{
            body.classList.remove('bg-gray-900');
            body.classList.remove('text-gray-200');
            container.classList.remove('bg-gray-800');
            container.classList.remove('text-gray-200');
        }
    }
    themeToggle.addEventListener('click', function(){
        body.classList.toggle('bg-gray-900');
        body.classList.toggle('text-gray-200');
        container.classList.toggle('bg-gray-800');
        container.classList.toggle('text-gray-200');
        if(body.classList.contains('bg-gray-900')){
            localStorage.setItem('theme', 'dark');
        }else{
            localStorage.setItem('theme', 'light');
        }
    });
});
document.getElementById('weatherForm').addEventListener('submit', function(e){
    e.preventDefault();
    const city = document.getElementById('city').value;
    const weatherResult = document.getElementById('weatherResult');
    fetch(`weather.php?city=${city}`)
        .then(response => response.json())
        .then(data => {
            if(data.error){
                weatherResult.innerHTML = `<p class="text-red-500">${data.error.message}</p>`;
            }else{
                const temp = data.current.temp_c;
                const description = data.current.condition.text;
                const icon = data.current.condition.icon;
                weatherResult.innerHTML = `
                    <h2 class="text-2xl font-semibold mb-2">${city}</h2>
                    <p class="text-xl">Temperature: ${temp}°C</p>
                    <p class="text-lg mb-4">Condition: ${description}</p>
                    <img class="mx-auto" src="${icon}" alt="${description}">
                `;
            }
        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
            weatherResult.innerHTML = `<p class="text-red-500">Error fetching weather data: ${error.message}</p>`;
        });
});