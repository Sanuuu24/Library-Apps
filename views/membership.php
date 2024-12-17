<?php
$number = 1;
if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}

if (!isset($_SESSION['is_login'])) {
    header('location: /login');
}
include('templates/header.php');
include('config/database.php');
?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-xl overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-3xl font-bold text-white">Ryusaaa Library</h3>
                    <p class="mt-2 text-xl text-white">Member Management</p>
                </div>
                <a href="/register" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Add Membership
                </a>
            </div>
        </div>

        <!-- Table Section -->
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php
                        $query = $pdo->query("SELECT * FROM users WHERE role_id = 2");
                        $members = $query->fetchAll(PDO::FETCH_OBJ);
                        $number = 1;
                        foreach ($members as $member) {
                            echo "<tr class='hover:bg-gray-100'>
                                <td class='px-6 py-4 whitespace-nowrap'>{$number}</td>
                                <td class='px-6 py-4 whitespace-nowrap'>{$member->name}</td>
                                <td class='px-6 py-4 whitespace-nowrap'>{$member->username}</td>
                                <td class='px-6 py-4 whitespace-nowrap'>Member</td>
                                <td class='px-6 py-4 whitespace-nowrap'>
                                    <a href='/membership?delete={$member->id}' class='text-red-600 hover:text-red-900'>
                                        <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16' />
                                        </svg>
                                    </a>
                                </td>
                            </tr>";
                            $number++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 p-4 text-center">
            <a href="/" class="text-blue-600 hover:text-blue-900 transition duration-300">Kembali ke Beranda</a>
        </div>
        
        <div class="mt-8 text-center text-gray-500">
            <p>&copy; <?= date('Y') ?> All Rights Reserved By <span class="text-blue-600 font-semibold">Ryusaaa Library</span></p>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>
