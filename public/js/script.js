// public/js/script.js

// JavaScript to implement the running timer with current date and time in Indonesian timezone (WIB)
function updateTime() {
    const now = new Date();
    const options = { 
        year: 'numeric', 
        month: '2-digit', 
        day: '2-digit', 
        hour: '2-digit', 
        minute: '2-digit', 
        second: '2-digit', 
        hour12: false 
    };

    // Set time zone to WIB (UTC+7)
    const indonesianTime = now.toLocaleString('en-ID', { timeZone: 'Asia/Jakarta', ...options });

    document.getElementById('timer').textContent = 'Date & Time: ' + indonesianTime;
}

// Update time every second
setInterval(updateTime, 1000);
// Initial call to display the time immediately
updateTime();
// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    // Future JavaScript functionality can be added here
    console.log('Greenhouse Control loaded.');
});
// JavaScript for dynamic updates
document.addEventListener('DOMContentLoaded', function() {
    // Example function to update sensor data
    function updateSensorData() {
        // Fetch new data from API or server
        // For demonstration, using static data
        const newData = {
            temperature: Math.floor(Math.random() * 50),  // Random temperature for example
            humidity: Math.floor(Math.random() * 100),     // Random humidity for example
            co2: Math.floor(Math.random() * 2000)          // Random CO2 level for example
        };

        // Update the DOM elements with new data
        document.getElementById('temp-data').innerText = `${newData.temperature}°C`;
        document.getElementById('humidity-data').innerText = `${newData.humidity}%`;
        document.getElementById('co2-data').innerText = `${newData.co2} ppm`;

        // Update the meters
        document.getElementById('temp-meter').value = newData.temperature;
        document.getElementById('humidity-meter').value = newData.humidity;
        document.getElementById('co2-meter').value = newData.co2;
    }

    // Call updateSensorData every 5 seconds to simulate data fetching
    setInterval(updateSensorData, 5000);
});
