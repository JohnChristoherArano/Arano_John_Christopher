<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
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
    <div class="bg-white shadow-lg rounded-lg max-w-lg w-full p-8">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Create User Account</h2>
        <form action="<?= site_url('create'); ?>" method="POST" class="space-y-4">
            <div>
                <label for="lastname" class="block text-gray-600 font-medium mb-1">Last Name</label>
                <input type="text" name="lastname" id="lastname" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="firstname" class="block text-gray-600 font-medium mb-1">First Name</label>
                <input type="text" name="firstname" id="firstname" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-gray-600 font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block text-gray-600 font-medium mb-1">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="confirm_password" class="block text-gray-600 font-medium mb-1">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="role" class="block text-gray-600 font-medium mb-1">Role</label>
                <select name="role" id="role" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="flex gap-4">
                <input type="submit" value="Submit" class="flex-1 bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition">
                <a href="<?= site_url('view'); ?>" class="flex-1 text-center text-gray-600 font-semibold py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">Back</a>
            </div>
        </form>
    </div>
</body>
</html>