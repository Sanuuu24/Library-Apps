<?php
$number = 1;
$number1 = 1;
if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}
include('templates/header.php'); ?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-xl overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
            <h2 class="text-3xl font-bold text-center text-white">Pengembalian Buku</h2>
        </div>

        <!-- Table Section -->
        <div class="p-6">
            <h3 class="text-xl font-semibold text-center text-gray-700 mb-4">Buku yang Sedang Dipinjam</h3>
            <div class="overflow-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-4 py-2 text-center">No</th>
                            <th class="px-4 py-2">Judul</th>
                            <th class="px-4 py-2">Pengarang</th>
                            <th class="px-4 py-2">Tahun</th>
                            <th class="px-4 py-2">Tanggal Peminjaman</th>
                            <th class="px-4 py-2">Tanggal Pengembalian</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 text-center"><?= $number++ ?></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2"></td>
                            <td class="px-4 py-2 text-center">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded-lg shadow transition-all duration-300">Kembalikan Buku</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 p-4 text-center">
            <a href="/" class="text-blue-600 font-medium hover:underline">
                <i class="bi bi-arrow-left"></i> Back to Home
            </a>
            <p class="mt-2 text-gray-600">&copy; <?= date('Y') ?>Ryusaaa Library</p>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>
