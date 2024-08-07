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
            font-size: 2.5em;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .controller {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
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
            .controller {
                grid-template-columns: 1fr;
            }
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
                    <div><span class="label">Department:</span> {{ $datastudent->department }}</div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
