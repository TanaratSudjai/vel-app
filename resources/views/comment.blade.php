<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment List</title>
    <!-- Link to Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">List of Comments</h1>

        <!-- Comments Table -->
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left text-gray-600">ID</th>
                    <th class="py-2 px-4 text-left text-gray-600">Title</th>
                    <th class="py-2 px-4 text-left text-gray-600">Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commentlist as $comment)
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">{{ $comment->id }}</td>
                        <td class="py-2 px-4">{{ $comment->title }}</td>
                        <td class="py-2 px-4">{{ $comment->comment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
