<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            max-width: 400px;
            width: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #6a0dad;
            color: white;
            padding: 15px;
            font-weight: bold;
            font-size: 1.2em;
            text-align: center;
        }

        .card-body {
            padding: 25px;
        }

        .card-body div {
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .label {
            font-weight: bold;
            color: #6a0dad;
            margin-right: 10px;
        }

        @media (max-width: 600px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Student ID: {{ $studentbyid->id }}
            </div>
            <div class="card-body">
                <div><span class="label">Name:</span> {{ $studentbyid->name }}</div>
                <div><span class="label">Age:</span> {{ $studentbyid->age }}</div>
                <div><span class="label">Department:</span> {{ $studentbyid->department }}</div>
            </div>
        </div>
    </div>
</body>
</html>
