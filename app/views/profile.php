<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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
    <div class="bg-white shadow-lg rounded-lg max-w-md w-full p-8 text-center">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">My Profile</h1>
        <p class="text-lg text-gray-600"><?php echo $fname.' '. $lname; ?></p>
    </div>
</body>
</html>