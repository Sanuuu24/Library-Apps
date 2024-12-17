<?php
if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}

include('templates/header.php');


$search = $_GET['search'] ?? '';
$listBooks = Book::filter($search);

?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-xl overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
            <h2 class="text-3xl font-bold text-center text-white">Daftar Buku</h2>
        </div>

        <div class="p-6">
            <!-- Form Pencarian -->
            <form action="/book" method="GET" class="mb-6">
                <div class="flex space-x-2">
                    <input type="text" name="search" value="<?= htmlspecialchars($search); ?>" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Cari judul buku..." />
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300">
                        Cari
                    </button>
                </div>
            </form>

            <?php if (!empty($listBooks)): ?>
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Judul</th>
                            <th class="py-2 px-4 border-b">Penulis</th>
                            <th class="py-2 px-4 border-b">Tahun</th>
                            <th class="py-2 px-4 border-b">Nomor Seri Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listBooks as $book): ?>
                            <tr>
                                <td class="py-2 px-4 border-b"><?= $book->getId(); ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($book->getTitle()); ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($book->getAuthor()); ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($book->getYear()); ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($book->getBookSerial()); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-gray-700 text-center">Tidak ada buku tersedia.</p>
            <?php endif; ?>
        </div>

        <!-- Footer -->
        <div class="bg-gray-100 p-4 text-center">
            <a href="/" class="text-blue-600 font-medium hover:underline">
                <i class="bi bi-arrow-left"></i> Back to Home
            </a>
            <p class="mt-2 text-gray-600">&copy; <?= date('Y') ?> Ryusaaa Library</p>
        </div>
    </div>
</div>

<?php include('templates/footer.php'); ?>
