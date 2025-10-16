<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
    <div class="container mx-auto max-w-6xl">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
            <h1 class="text-3xl font-semibold text-gray-800">User Dashboard</h1>
            <a href="<?= site_url('logout'); ?>" class="text-gray-600 font-semibold px-6 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition">Logout</a>
        </div>
        <form method="get" action="<?= site_url('user/dashboard'); ?>" class="mb-6">
            <div class="flex items-center gap-3 bg-white border border-gray-300 rounded-lg px-4 py-2">
                <input type="text" name="search" value="<?= htmlspecialchars($search_term ?? ''); ?>" placeholder="Search by name or email..." class="flex-grow outline-none text-gray-600">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Search</button>
            </div>
        </form>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase">ID</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Last Name</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase">First Name</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($users)): ?>
                            <tr>
                                <td colspan="4" class="py-8 text-center text-gray-500">No records found.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($users as $user): ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-600"><?= $user['student_id']; ?></td>
                                    <td class="px-4 py-3 text-sm text-gray-600"><?= $user['last_name']; ?></td>
                                    <td class="px-4 py-3 text-sm text-gray-600"><?= $user['first_name']; ?></td>
                                    <td class="px-4 py-3 text-sm text-gray-600"><?= $user['email']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if (!empty($users) && $total_pages > 1): ?>
            <div class="mt-6 flex justify-center">
                <ul class="flex items-center gap-2">
                    <?php if ($page > 1): ?>
                        <li><a href="<?= site_url('user/dashboard?search='.urlencode($search_term).'&page=1'); ?>" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">⏮ First</a></li>
                        <li><a href="<?= site_url('user/dashboard?search='.urlencode($search_term).'&page='.($page-1)); ?>" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">← Prev</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li>
                            <a href="<?= site_url('user/dashboard?search='.urlencode($search_term).'&page='.$i); ?>" class="px-3 py-1 rounded-lg <?= $i == $page ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100'; ?>">
                                <?= $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                    <?php if ($page < $total_pages): ?>
                        <li><a href="<?= site_url('user/dashboard?search='.urlencode($search_term).'&page='.($page+1)); ?>" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">Next →</a></li>
                        <li><a href="<?= site_url('user/dashboard?search='.urlencode($search_term).'&page='.$total_pages); ?>" class="px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-lg">Last ⏭</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>