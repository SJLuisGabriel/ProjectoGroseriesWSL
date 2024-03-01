<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Groceries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
        }

        .message {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuevo Mensaje de Groceries</h1>
        <div class="message">
            <p><strong>Nombre:</strong> {{ $mailContent['name'] }}</p>
            <p><strong>Correo electrónico:</strong> {{ $mailContent['email'] }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $mailContent['message'] }}</p>
        </div>
    </div>
</body>
</html>
