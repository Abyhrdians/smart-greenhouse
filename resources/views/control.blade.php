<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenhouse Control</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Greenhouse Control</h1>
    <p>Here, you can control the temperature, humidity, and light settings of the greenhouse.</p>

    <!-- Display session message if it exists -->
    @if (session('message'))
        <div class="message">
            {{ session('message') }}
        </div>
    @endif

    <!-- Back to Home Link -->
    <a href="{{ route('home') }}">Back to Home</a>

    <!-- Control Form -->
    <form action="/control" method="POST">
        @csrf
        <label for="temperature">Set Temperature:</label>
        <input type="number" id="temperature" name="temperature" required>

        <label for="humidity">Set Humidity:</label>
        <input type="number" id="humidity" name="humidity" required>

        <label for="light">Set Light Intensity:</label>
        <input type="number" id="light" name="light" required>

        <button type="submit">Update Settings</button>
    </form>

    <!-- Link to external JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
