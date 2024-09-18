<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    <div class="flex justify-center items-center min-h-screen bg-red-700">
        <form action="{{ route('user.store')}}" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold text-gray-700">Nama:</label>
                <input type="text" name="nama" id="nama" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="npm" class="block text-sm font-semibold text-gray-700">NPM:</label>
                <input type="text" name="npm" id="npm" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-sm font-semibold text-gray-700">Kelas:</label>
                <input type="text" name="kelas" id="kelas" class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            <div>
                <button type="submit" class="w-full bg-red-600 text-white p-2 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>