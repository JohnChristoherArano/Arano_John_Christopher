<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        html, body { font-family: 'Inter', sans-serif; }
        body {
            background-color: #f3f4f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="bg-white shadow-lg rounded-lg max-w-2xl w-full p-12 text-center">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Welcome to Our System</h1>
        <p class="text-lg text-gray-600 mb-6">Manage your records with ease and efficiency.</p>
        <div class="flex justify-center gap-4">
            <a href="<?= site_url('login'); ?>" class="px-6 py-2 text-gray-600 font-semibold rounded-lg border border-gray-300 hover:bg-gray-100 transition">Login</a>
            <a href="<?= site_url('signup'); ?>" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">Register</a>
        </div>
    </div>
</body>
</html>