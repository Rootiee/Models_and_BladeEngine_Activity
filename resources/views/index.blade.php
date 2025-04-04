<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    @include('layouts.header')

    <div class="container mx-auto p-6">
        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-3">Title</th>
                    <th class="p-3">Author</th>
                    <th class="p-3">ISBN</th>
                    <th class="p-3">Published Year</th>
                    <th class="p-3">Genre</th>
                    <th class="p-3">Price</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($books as $book)
                    <tr class="border-b">
                        <td class="p-3">{{ $book->title }}</td>
                        <td class="p-3">{{ $book->author }}</td>
                        <td class="p-3">{{ $book->isbn }}</td>
                        <td class="p-3">{{ $book->published_year }}</td>
                        <td class="p-3">{{ $book->genre }}</td>
                        <td class="p-3">₱{{ number_format($book->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('layouts.footer')

</body>
</html>
