<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
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
    <div class="container mx-auto max-w-md bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-3xl font-semibold text-gray-800 text-center mb-6">Sign Up</h1>
        <form action="<?= site_url('signup'); ?>" method="POST" class="space-y-4">
            <div>
                <label for="first-name" class="block text-gray-600 text-sm font-medium mb-1">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="John" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="last-name" class="block text-gray-600 text-sm font-medium mb-1">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Doe" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-gray-600 text-sm font-medium mb-1">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="user-type" class="block text-gray-600 text-sm font-medium mb-1">User Type</label>
                <select id="user-type" name="user-type" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="user" selected>User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div>
                <label for="password" class="block text-gray-600 text-sm font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="••••••••" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex gap-4">
                <button type="submit" name="submit" class="flex-1 bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">Sign Up</button>
                <a href="<?= site_url('landing-page'); ?>" class="flex-1 text-center text-gray-600 font-semibold py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">Back</a>
            </div>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600 text-sm">
                Already have an account? <a href="<?= site_url('login'); ?>" class="text-blue-600 hover:underline">Log In</a>
            </p>
        </div>
    </div>
</body>
</html>