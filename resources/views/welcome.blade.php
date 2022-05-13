<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Software Testing</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Welcome to Software Testing</h1>
    <button id="click-me">Click Me</button>

    <script>
        let button = document.getElementById('click-me');

        button.addEventListener('click', function (e) {
            e.preventDefault();

            alert('Thank for click me!');
        })
    </script>
</body>
</html>
