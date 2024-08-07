<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
    <!-- ลิงก์ไปยัง Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mx-auto p-3 m-3 text-center">
        <h1 class="text-2xl font-bold mb-4">List of Posts</h1>

        <!-- Button to open modal -->
        <button onclick="openModal()" class="bg-blue-500 text-white py-2 px-4 rounded">Add New Post</button>

        <!-- Modal -->
        <div id="postModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <h2 class="text-xl font-bold mb-4">Add New Post</h2>
                <form action="{{ route('insert.post') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Title</label>
                        <input type="text" name="title" id="title"
                            class="w-full border border-gray-300 rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="body" class="block text-gray-700">Body</label>
                        <textarea name="body" id="body" rows="4" class="w-full border border-gray-300 rounded p-2" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add Post</button>
                    <button type="button" onclick="closeModal()"
                        class="bg-red-500 text-white py-2 px-4 rounded ml-2">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Display posts -->
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md mt-4">
            <thead class="bg-gray-100 border-b border-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left text-gray-600">ID</th>
                    <th class="py-2 px-4 text-left text-gray-600">Title</th>
                    <th class="py-2 px-4 text-left text-gray-600">Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postlist as $post)
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">{{ $post->id }}</td>
                        <td class="py-2 px-4">{{ $post->title }}</td>
                        <td class="py-2 px-4">{{ $post->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Modal Script -->
    <script>
        function openModal() {
            document.getElementById('postModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('postModal').classList.add('hidden');
        }
    </script>

</body>

</html>
