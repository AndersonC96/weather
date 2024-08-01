document.getElementById('weatherForm').addEventListener('submit', function(e){
    e.preventDefault();
    const city = document.getElementById('city').value;
    const weatherResult = document.getElementById('weatherResult');
    fetch(`weather.php?city=${city}`)
        .then(response => response.json())
        .then(data => {
            if(data.error){
                weatherResult.innerHTML = `<p>${data.error.message}</p>`;
            }else{
                const temp = data.current.temp_c;
                const description = data.current.condition.text;
                const icon = data.current.condition.icon;
                weatherResult.innerHTML = `
                    <h2>${city}</h2>
                    <p>Temperature: ${temp}°C</p>
                    <p>Condition: ${description}</p>
                    <img src="${icon}" alt="${description}">
                `;
            }
        })
        .catch(error => {
            weatherResult.innerHTML = `<p>Error fetching weather data</p>`;
        });
});