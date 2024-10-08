<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Greenhouse</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to the Smart Greenhouse System</h1>
        <div class="timer" id="timer">Date & Time: 00/00/0000 00:00:00</div>
    </header>
    <nav>
        <a href="{{ route('monitor') }}">Go to Monitoring</a>
        <a href="{{ route('control') }}">Go to Control</a>
    </nav>
    <section>
        <h2>About Our Smart Greenhouse</h2>
        <p>
            Our Smart Greenhouse is designed to optimize plant growth and health using advanced technology. 
            With real-time monitoring and control of environmental conditions, you can ensure your plants receive the best care.
        </p>
        <p>
            Key features include:
        </p>
        <ul>
            <li>Automated watering and nutrient delivery</li>
            <li>Real-time temperature, humidity, and light monitoring</li>
            <li>Remote control via web interface or mobile app</li>
            <li>Data analytics for optimizing growth conditions</li>
        </ul>
        <img src="https://images.unsplash.com/photo-1566492129428-5cf1f8e1b40b" alt="Smart Greenhouse">
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
