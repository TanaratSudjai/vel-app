<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
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
        }
        .controller {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color: #6a0dad;
            color: white;
            padding: 10px;
            font-weight: bold;
        }
        .card-body {
            padding: 20px;
        }
        .card-body div {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Student List</h1>
    <div class="controller">
        @foreach ($student as $datastudent)
        <div class="card">
            <div class="card-header">
                Student ID: {{ $datastudent->id }}
            </div>
            <div class="card-body">
                <div><span class="label">Name:</span> {{ $datastudent->name }}</div>
                <div><span class="label">Age:</span> {{ $datastudent->age }}</div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>