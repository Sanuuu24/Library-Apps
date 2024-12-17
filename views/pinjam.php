<?php
$number = 1;
$number1 = 1;

if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}

include('templates/header.php'); 

$listBooks = Book::get();

?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center py-6 px-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-xl overflow-hidden">
        <!-- Header Section -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
            <h2 class="text-3xl font-bold text-center text-white">Peminjaman Buku</h2>
        </div>

        <div class="p-6">
            <form action="/pinjam" method="POST" class="space-y-4">
                <div class="space-y-2">
                    <label for="book_serial" class="block text-gray-700 font-medium">Nomor Seri Buku</label>
                    <select name="book_serial" id="book_serial" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Nomor Seri Buku</option>
                        <?php foreach ($listBooks as $book) : ?>
                            <option value="<?= htmlspecialchars($book->getBookSerial()) ?>">
                                <?= htmlspecialchars($book->getBookSerial()) ?> - <?= htmlspecialchars($book->getTitle()) ?> (<?= htmlspecialchars($book->getAuthor()) ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="user_id" class="block text-gray-700 font-medium">Pilih Member</label>
                    <select name="user_id" id="user_id" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Member</option>
                        <?php foreach ($data2 as $member) : ?>
                            <option value="<?= $member->getId() ?>">
                                <?= htmlspecialchars($member->getName()) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="borrow_date" class="block text-gray-700 font-medium">Tanggal Peminjaman</label>
                    <input type="date" name="borrow_date" id="borrow_date" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="<?= date('Y-m-d') ?>" required>
                </div>

                <div class="space-y-2">
                    <label for="return_date" class="block text-gray-700 font-medium">Tanggal Pengembalian</label>
                    <input type="date" name="return_date" id="return_date" class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300">
                        Pinjam Buku
                    </button>
                </div>
            </form>
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
