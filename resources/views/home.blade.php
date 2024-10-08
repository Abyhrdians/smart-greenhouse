<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Greenhouse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            color: #4CAF50;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #4CAF50;
            color: white;
        }

        /* Responsive styles */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            nav {
                flex-direction: column;
                align-items: center;
            }

            nav a {
                margin: 5px 0;
                width: 100%; /* Make links full width on small screens */
                text-align: center;
            }
        }

        /* Flexbox layout for larger screens */
        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        section {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Smart Greenhouse System</h1>
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
</body>
</html>
